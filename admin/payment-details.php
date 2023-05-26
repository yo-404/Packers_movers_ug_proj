<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['clientmsaid']==0)) {
  header('location:logout.php');
  } else{
  	?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Client Management Sysytem || Manage Client </title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- /js -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!-- //js-->
</head> 
<body>
	<div class="page-container">
	<?php
//<td><br> <?php  echo " <br>    ".$row["password"];
$servername="localhost";
$username="root";
$password="12345678";
$dbname="pay";

$conn=mysqli_connect($servername,$username,$password,$dbname);

//to checck if the conenction succeed
	if(!$conn)
	{	
		die("connection failed:".mysqli_connect_error());
	}

	

	$sql="SELECT * FROM Payment";
	$result=mysqli_query($conn,$sql);
	?>
	<body>
	<div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container">
	<div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container">
	<br><hr>
	<h2> Payment LOG </h2>
	<hr><br>
	  <table border="3">
        <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
		<th>EMAIL</th>
        <th>ADDRESS 1</th>
        <th>ADDRESS 2</th>
        <th>COUNTRY</th>
        <th>STATE</th>
        <th>ZIP CODE</th>
        <th>ORDER ID</th>
        <th>AMOUNT</th>
        </tr>
		</div></div></div></div></div></div></div></div>
		</div></div></div></div></div></div></div>
	
	<?php
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{	?>
      
        <tr>
		<td> <?php echo "".$row["Firstname"]; ?> </td>
		<td> <?php echo "".$row["Lastname"]; ?></td>
		<td><br> <?php  echo "".$row["Email"];?>
       <td> <?php   echo "  ".$row["Address"];?></td>
       <td> <?php echo "".$row["Address2"]; ?> </td>
		<td> <?php echo "".$row["Country"]; ?></td>
		<td><br> <?php  echo "".$row["State"];?>
       <td> <?php   echo "".$row["Zip"];?></td>
       <td><br> <?php  echo "".$row["Order_ID"];?>
       <td> <?php   echo "".$row["Amount"];?></td>
       


            <?php
		}
	}	
	else 
	echo "0 Result ";
	mysqli_close($conn);
	
?>
				<!--//outer-wp-->
				<?php include_once('includes/footer.php');?>
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<?php include_once('includes/sidebar.php');?>
		<div class="clearfix"></div>		
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php }  ?>