<?php 
session_start(); 
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$db_server = "localhost";

$db_name = "web";

$db_user = "root";

$db_passwd = "";

if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");


mysql_query("SET NAMES utf8");

? >