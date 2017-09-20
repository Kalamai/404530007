<?php
	
	session_start();
	
	if($_SESSION["username"] != null)
		{   
			echo "會員姓名: "; 
			echo ($_SESSION["username"]);

		}
	else {
		   echo "您無權限觀看此頁面!";
		   header('location: Login.html');
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>News</title>
    <style>
		table.TB_COLLAPSE {
			width:100%;
			border-collapse:separate;
		}
		table.TB_COLLAPSE caption {
			padding:10px;
			font-size:24px;
			background-color:rgb(226,214,192);
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
			background-color:rgb(230,230,198);
		}
			
        body {
            background-image: url(image6.jpeg);
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
			background-color:rgb(255,255,255);
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
			top: 200px;
			left: 50%;
			margin:  -80px 0 0 -140PX;
			border-radius: 1px;
		}
			
		#bottom {
			position: absolute;
			width: 300px;
			height:400px;
			bottom: 0;
			top: 590px;
			left: 50%;			
			margin:  -80px 0 0 -140PX;
			border-radius: 1px;

		}
		}		
		
		
    </style>
</head>

<body>
    <?php
	
        include 'web.php';      								  //資料庫連結
  
        $sql = "SELECT * FROM NEWS ORDER BY 'ID'";  			  //SQL 語法
        $result = mysqli_query($link, $sql) or die("Error");

        $data_nums = mysqli_num_rows($result);     				 //統計總比數
        $per = 5;												//每頁顯示項目數量
        $pages = ceil($data_nums/$per);  					    //取得不小於值的下一個整數
        if (!isset($_GET["page"])){
            $page=1; 											//則在此設定起始頁數
        } 
		else {
            $page = intval($_GET["page"]); 						//確認頁數只能夠是數值資料
        }
        $start = ($page-1)*$per ;								//每一頁開始的資料序號
        $result = mysqli_query($link, $sql.' LIMIT '.$start.', '.$per) or die("Error");
    ?>
		
	<div id="Header">
		<h1>Update</h1>
	</div>
		
	<div id="sub-mainbox">
		<h2>    </h2>
		
    <table  class="TB_COLLAPSE">
         <caption>
           最新消息
         </caption>
	<thead>
		<tr>
			<th>編號</th>
			<th>日期</th>
			<th>標題</th>
			<th>內容</th>
		</tr>
	 </thead>

	 <?php
        //輸出資料內容
        while ($row = mysqli_fetch_array ($result))
        {
			$NO= $row['ID'];
            $DATE = $row['Date'];
            $TITLE = $row['Title'];
            $CONTENT = $row['Content'];
        
            echo '
			<tfoot>
            <tr>
                <td>'. $NO .'</td>			
                <td>'. $DATE .'</td>
                <td>'. $TITLE .'</td>
                <td>'. $CONTENT .'</td>
            </tr>
			</tfoot>';
        }
    ?>
    
    </table>

    <br/>
    
    <center>
    <?php
        //分頁頁碼
        echo "<br /><a href=?page=1> 首頁</a> ";
        
        for( $i=1 ; $i<=$pages ; $i++ ) {
            if ( $page-5 < $i && $i < $page+5 ) {
                echo "<a href=?page=". $i .">". $i ."</a> ";
            }
        } 
        echo "<a href=?page=".$pages.">末頁</a>，第". $page ."頁/共". $pages ."頁<br/>";

        echo '共 '.$data_nums.' 筆';

    ?>
	</div>
    </center>
		
	<div id="bottom"">	
	<FORM  ACTION="updatenews.php" METHOD="POST"   ><br>
		<table border = "0"    >
		<tr>
			<td colspan = "2" align = "center"  > 
				<B>NO: </B><input type="text" name="ID" >
			</td>
		</tr>		
		
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
	</div>		
		
		
		
		
		
	<div id="footer">
		<h3>   <a href="logout.php">>>>登出</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="member.php">回首頁 </a></h3>
	</div>
		
</body>
</html>