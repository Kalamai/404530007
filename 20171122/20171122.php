<html>
	<head>
		<title>20171122</title>
	</head>
	<body>
		<form method='post' action='20171122.php' enctype='multipart/form-data'> 
			height: <input type='text' name='height'  /> m<BR><BR>
			weight: <input type='text' name='weight'  /> kg<BR><BR>
  			Select File: <input type='file' name='filename' size='10' /> <BR>
  			<input type='submit' value='Upload' />
		</form>

<?php
	$m =$_POST["height"];
	$kg =$_POST["weight"];
	$BMI=$kg/($m*$m);
	$ans=round($BMI,1);
	echo "height:$m<BR>"; 
	echo "weight:$kg<BR>"; 
	echo "BMI:" . "&nbsp;<b>$ans</b>&nbsp;"; 

  if($_FILES){ 
	$name = $_FILES['filename']['name'];
	$tmp_name = $_FILES['filename']['tmp_name'];
	move_uploaded_file($_FILES['filename']['tmp_name'],$name);
	$tmp_name = $_FILES['filename']['tmp_name'];
	echo "<BR><img src='$name'/>";
  }

?>
</html>
