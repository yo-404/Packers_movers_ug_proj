<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<?php
//<td><br> <?php  echo " <br>    ".$row["password"];
$servername="localhost";
$username="root";
$password="12345678";
$dbname="yogi";

$conn=mysqli_connect($servername,$username,$password,$dbname);

//to checck if the conenction succeed
	if(!$conn)
	{	
		die("connection failed:".mysqli_connect_error());
	}

	

	$sql="SELECT * FROM users";
	$result=mysqli_query($conn,$sql);
	?>
	<body>
	<div class="container">
	<br><hr>
	<h2> registered users details </h2>
	<hr><br>
	  <table border="3">
        <tr>
        <th>ID</th>
        <th>username</th>
		<th>password hash key </th>
        <th>Created at</th>
        </tr>
		</div>
	
	<?php
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{	?>
      
        <tr>
		<td> <?php echo "UID".$row["id"]; ?> </td>
		<td> <?php echo "".$row["username"]; ?></td>
		<td><br> <?php  echo "".$row["password"];?>
       <td> <?php   echo "  ".$row["created_at"];?></td>
            <?php
		}
	}	
	else 
	echo "0 Result ";
	mysqli_close($conn);
	
?>
</body>
</html>