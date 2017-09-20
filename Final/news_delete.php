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
<head>

	<title>Delete</title>
    <style>
		table.TB_COLLAPSE {
			width:100%;
			border-collapse:separate;
		}
		table.TB_COLLAPSE caption {
			padding:10px;
			font-size:24px;
			background-color:rgb(221,207,206);
		}
		table.TB_COLLAPSE thead th {
			font-size:20px;
			padding:5px 0px;
			color:#fff;
			background-color:#915957;
		}

		table.TB_COLLAPSE tfoot td {
			font-size:16px;
			padding:5px 0px;
			text-align:center;
			background-color:rgb(241,236,235);
		}
			
        body {
            background-image: url(image4.jpeg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
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
			background-color:rgb(173, 139, 135);
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
			
			
		#sub-mainbox {
			width: 300px;
			height: 400px;
			position: absolute;
			top: 40%;
			left: 50%;
			margin:  -80px 0 0 -140PX;
			border-radius: 1px;
			

		}		
		
		
    </style>
</head>
<body>

<?php
	include 'web.php'; // 匯入連線檔案

	$sql = "SELECT ID, DATE, TITLE, CONTENT FROM news"; // select語法
	$result = mysqli_query($link, $sql);

	if (mysqli_num_rows($result) > 0) { //如果select的資料大於0筆

	    echo '
	    <div id="Header">
			<h1>Delete</h1>
		</div>
		
		<div id="sub-mainbox">
		<h2>    </h2>
	    <form method="post" action="delete.php">
		
		
		    <table class="TB_COLLAPSE">
			     <caption>
					最新消息
				 </caption>
			<thead>	 
				<tr>
					<th>日期</th>
					<th>標題</th>
					<th>內容</th>
					<th>刪除</th>
				</tr>
			</thead>';

		while($row = mysqli_fetch_assoc($result)) {
        	echo "
			<tfoot>
				<tr>
					<td>" . $row["DATE"]. "</td>
					<td>" . $row["TITLE"]. "</td>
					<td>" . $row["CONTENT"]. "</td>".
					'<td><input type="checkbox" name="checkbox[]" value='.$row["ID"].' /></td>
				</tr>
			</tfoot>';
			
	    }
	
		
	    echo "</table>";
		echo '    ';
	    echo '<center><input type="submit" value="送出" id="submit"/></center>';
	   	echo "</form>";
		echo "</div>";
		
	} else {
	    echo "0 results";
	}

	mysqli_close($link);
?>

		
	<div id="footer">
	<h3>   <a href="logout.php">>>>登出</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="member.php">回首頁 </a></h3>
	
	</div>
		

</body>
</html>