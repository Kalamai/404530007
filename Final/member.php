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

		<html>

			<style>
				table .tabStyle td	{
				vertical-align:middle;
				}
			
				html {
					margin:0; padding:0; height: 100%;
				}	

				body {
					background-image: url(image2.jpeg);
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-position: center;
					background-size: cover;
				}

				#DIV_top{
					width: 125px;
					height: 25px;
					top: 1%;
					left: 0%;
					position:absolute;
					background-color:rgb(235, 255, 240);
					opacity: 0.25;
					filter:alpha(opacity=25);
				}					
					
				#footer {
					position: fixed;
					bottom: 0;
					width: 60px;
					height:25px;	
					line-height:5px;
					font-size:11px;
					background-color:rgb(235, 255, 240);
				}					
					
				.sub-mainbox {
					width: 350px;
					height:300px;
					position: absolute;
					top: 50%;
					left: 50%;
					margin:  -100px 0 0 -140PX;
					border-radius: 1px;
					background-color:rgb(252, 255, 235);
					opacity: 0.40;
					filter:alpha(opacity=40);
				}
			
			</style>
		
			<head>
				<title>Member</title>
			</head>
			
			<body>
					
					<div id="DIV_top">
						
					</div>

					<div>
					<table border = "0"     class= "sub-mainbox" >

						<tr>
						<td align="center"><font size="8"   face="DFKai-sb"><a href="news_show.php">查詢</a> </font></td>
						</tr>
						<tr>
						<td align="center"><font size="8"   face="DFKai-sb"><a href="add_news.php">新增</a>  </font></td>
						</tr>
						<tr>
						<td align="center"><font size="8"   face="DFKai-sb"><a href="update.php">更新</a>  </font></td>
						</tr>						
						<tr>
						<td align="center"><font size="8"   face="DFKai-sb"><a href="delete.php">刪除</a> </font></td>
						</tr>
	 
  
					</table>
	  
	  
					</div>
	  
		
			<div id="footer">
				<h3>   <a href="logout.php">>>>登出</a></h3>
			</div>
					
				

			</body>
		</html>

