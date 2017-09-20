<?php
	$ID= $_POST['ID'];
	$date=$_POST["date"];
	$title=$_POST["title"];
	$content=$_POST["content"];

	$link = mysqli_connect("localhost","root","","web");
	mysqli_set_charset($link, "utf8");


	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$sql  = "UPDATE news SET Date='$date', Title='$title', Content='$content' WHERE ID='$ID'";
 
		if(mysqli_query($link,$sql)){
            echo '修改成功!';
			header('Location: news_show.php');
        }
        else {
            echo '修改失敗!';
        }

	mysqli_close($link);

?>