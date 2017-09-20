<?php
	include 'web.php'; // 匯入連線檔案

	$check = $_POST['checkbox'];
	
	foreach($check as $value){
		$sql = "DELETE FROM NEWS WHERE ID = $value";
		mysqli_query($link, $sql);
	}

	header('location: news_delete.php');
	mysqli_close($link);
?>