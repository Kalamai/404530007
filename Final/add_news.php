<?php
	
	session_start();
	
	if($_SESSION["username"] != null)
		{   
			echo "會員姓名: " ;
			echo ($_SESSION["username"]);
			
		}
	else {
		   echo '您無權限觀看此頁面!';
		   header('location: Login.html');
	}
?>


<!DOCTYPE html>
<html lang="en">
	<style>
            table .tabStyle td	{
			vertical-align:middle;
			}
		
		html {
            margin:0; padding:0; height: 100%;
		}
			
			
		#Header{
			position: fixed;
			width:100%;
			height:60px;
			text-align:center;
			line-height:3px;
			font-size:23px;
			color:(0, 0, 0)
			font-weight:bold;
			background-color:rgb(235, 255, 240);
			opacity: 0.65;
			filter:alpha(opacity=65);
		}
		
		#footer {
			position: fixed;
			bottom: 0;
			width: 120px;
			height:25px;	
			line-height:5px;
			font-size:11px;
			background-color:rgb(235, 255, 240);
		}
			
        body {
            background-image: url(image3.jpeg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
			
		.sub-mainbox {
			width: 280px;
			height: 320px;
			position: absolute;
			top: 50%;
			left: 50%;
			margin:  -80px 0 0 -140PX;
			border-radius: 1px;
			background-color:rgb(150, 150, 150);
			opacity: 0.65;
			filter:alpha(opacity=65);
		}

			
    </style>



	<head>
			<meta charset="utf-8">
			<title>
					News
			</title>
	</head>
	
	<div id="Header">
			<h1>       News</h1>	
	</div>

	<body >
	
	<FORM  ACTION="getnews.php" METHOD="POST"   ><br>
		<table border = "0"     class= "sub-mainbox" >
		<tr>
			<td colspan = "2" align = "center"  > 
				<B>Date: </B><input type="date" name="date" >
			</td>
		</tr>
		<tr>
			<td colspan = "2" align = "center"> 		
				<B>Title: </B>  <input type="text" name="title" />
			</td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">
				<font size="5"><B>content: </B></font>
			</td>
		</tr>
		<tr>
			<th></th>
			<th><textarea name="content" rows="5" cols="30">PLZ TYPE</textarea> </th>
		</tr>
		
		<tr>
		<td colspan = "2" align = "center">
		<input type="submit" value="update" > <input type="reset" value="reset">
		<td>
		</tr>
		</table>
	</Form>
		
	<div id="footer">
		<h3>   <a href="logout.php">>>>登出</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="member.php">回首頁 </a></h3>
	</div>
		
	</body>
</html>