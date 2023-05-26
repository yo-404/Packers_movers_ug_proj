<?php
//to hide warning of undefined index or checkboxes
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$conn= mysqli_connect('localhost','root','','feesub1');


$qry_rcv="SELECT `rcv_no` FROM `rcv` order by `id` DESC LIMIT 1";

$get_last_rcv= mysqli_query($conn, $qry_rcv);

$data=mysqli_fetch_assoc($get_last_rcv);

$rcv_no=$data['rcv_no'];
$rcv_no++;

$name= $_POST['name'];
$class= $_POST['class'];
$reg_num=$_POST['reg_num'];

$particulars= "".$_POST['diary']." ".$_POST['tie']." ".$_POST['belt']." ".$_POST['adform']." ".$_POST['icard']." ".$_POST['yearly']." ".$_POST['admission'];


$depositer= $_POST['depositer'];

$date=$_POST['date'];

$month= "".$_POST['apr']." ".$_POST['may']." ".$_POST['jun']." ".$_POST['jul']." ".$_POST['aug']." ".$_POST['sep']." ".$_POST['oct']." ".$_POST['nov']." ".$_POST['dec']." ".$_POST['jan']." ".$_POST['feb']." ".$_POST['mar'];

$qry = " INSERT INTO `rcv` (`name`, `reg_num`,`class`, `depositer`, `date` , `rcv_no`, `particulars`, `fee_month`) VALUES ('$name','$reg_num','$class','$depositer','$date', '$rcv_no','$particulars','$month')";

$run=mysqli_query($conn,$qry);

$get_fee_month="SELECT `fee_month` FROM `rcv` WHERE `rcv_no`=$rcv_no";

$fee_data=mysqli_query($conn, $get_fee_month);
//Counting no of months paid
$fee_fetch=mysqli_fetch_assoc($fee_data);

$fee_string =$fee_fetch['fee_month'];

$fee_string= str_replace(' ', '', $fee_string);

$length= strlen($fee_string);
//Final No of months of fee paid
$no_of_month=$length/3;

?>
<div align="center">
	<body style="height: 147mm; width: 102mm; margin-top: 10px; margin-left: 8px;">
<table border="">
	<tr> <td  style= "text-align:center; border-width: 0px;" colspan="4" ><b style="font-size: 20px;">My New School</b></td></tr>
	<tr>
		<td colspan="2" style="border-width: px;" rowspan="2">Student Name: <b style="text-transform: uppercase; text-align: right;"><?php echo "".$_POST['name']." / ".$_POST['reg_num'];?></b><br>
		Paid by: <?php echo $_POST['depositer'];?><br>
		Class:<b><?php echo $_POST['class'];?></b>

		</td>
		<td align="right" colspan="2">Date: <?php echo $_POST['date'];?></td>
	</tr>
	<tr>
		<td colspan="3" align="right">Rc. No: <b><?php echo $rcv_no; ?></b></td>
	</tr>
	<tr>
		<td style="padding-left: 0px;"><b>Particulars</b></td>
		<td><b>Fee (250)</b></td>
		<td><b>Total</b></td>
		<td><b>Balance</b></td>
	</tr>
	<tr >
		<td style="padding-bottom: 150px; max-width: 25ch">
			<?php
			//Set item and their price
			if($_POST['diary'])
			{
				echo ""."Diary"." = 50Rs,";
				$amount=50;

			}
			if ($_POST['tie']) {
				echo " "."Tie"." = 40Rs,";
				$amount=$amount+40;
			}
			if ($_POST['belt']) {
				echo " "."Belt"." = 50Rs,";
				$amount=$amount+50;
			}

			if ($_POST['adform']) {
				echo " "."Ad form"." = 50Rs,";
				$amount=$amount+50;
			}
			if ($_POST['icard']) {
				echo " "."I card"." = 30Rs,";
				$amount=$amount+30;
			}
			if ($_POST['yearly']) {
				echo " "."Yearly"." = 250Rs,";
				$amount=$amount+250;
			}
			if ($_POST['admission']) {
				echo " "."Admission"." = 450Rs,";
				$amount=$amount+450;
			}

			else  { 

				echo "<br><div align=center>-------<br>";				
			    echo "-------</div>";
				
			}

			?>


		</td>
		<td style="padding-bottom: 150px; max-width: 15ch">
			<?php
			echo "<div style='text-transform:uppercase'>";
			echo $fee_fetch['fee_month'];
			?>
		</td>
		<td style="padding-bottom: 150px;"><?php echo $amount;?>+<?php echo 250*$no_of_month;?></td>
		<td style="padding-bottom: 150px;" align="right"></td>
		</tr>
	
	<tr><td colspan="2">Total :</td><td><?php echo $total= $amount+250*$no_of_month;?>/-</td><td align="right"></td></tr>
	<?php
	$qryy = " UPDATE `rcv` SET `total`='$total' WHERE `rcv_no`='$rcv_no'";
	$run=mysqli_query($conn,$qryy);
	?>
</table>
<input type="button" onclick="window.print()" value="Print now"  style="margin-top: 8px;" />
<a href="index.php" style="margin-left: 50px;">Go back!</a>