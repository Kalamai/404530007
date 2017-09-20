<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="login";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){die("失敗");}

	$ID=$_POST["ID"];
	$pw=$_POST["pw"];

	$sql="SELECT * from user where ID='$ID' and password='$pw'";

	if(mysqli_num_rows(mysqli_query($conn,$sql))>0){
		session_start();
		$_SESSION["username"]=$ID;
		$_SESSION["pw"]=$pw;
		echo "success";
		header('location: member.php');
	}
	else{
		echo"failed";
	}
	?>