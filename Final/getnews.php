

<?php
$date=$_POST["date"];
$title=$_POST["title"];
$content=$_POST["content"];

$link = mysqli_connect("localhost","root","","web");
mysqli_set_charset($link, "utf8");
//$link = mysqli_connect("localhost", "", "", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO news (Date,Title,Content) VALUES ('$date', '$title','$content')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
	header('Location: news_show.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>