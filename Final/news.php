
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Pages</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table {
            margin-left:auto; 
            margin-right:auto;
        }
    </style>
</head>
<body>
    <?php
		 
		$db_server = "localhost";

		$db_name = "web";

		$db_user = "root";

		$db_passwd = "";

		if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("�L�k���Ʈw�s�u");


		mysql_query("SET NAMES utf8");

        $data_nums = mysqli_num_rows($result);      //�έp�`���
        $per = 5;      //�C����ܶ��ؼƶq
        $pages = ceil($data_nums/$per);      //���o���p��Ȫ��U�@�Ӿ��
        if (!isset($_GET["page"])){ //���p$_GET["page"]���]�m
            $page=1; //�h�b���]�w�_�l����
        } else {
            $page = intval($_GET["page"]); //�T�{���ƥu����O�ƭȸ��
        }
        $start = ($page-1)*$per; //�C�@���}�l����ƧǸ�
        $result = mysqli_query($link, $sql.' LIMIT '.$start.', '.$per) or die("Error");
    ?>

    <table>
        <tr>
            <th colspan="3" style="font-size:25px;">�̷s����</th>
        </tr>
	<tr>
					<th>���</th>
					<th>���D</th>
					<th>���e</th>

				</tr>;

    <?php
        //��X��Ƥ��e
        while ($row = mysqli_fetch_array ($result))
        {
            $DATE = $row['Date'];
            $TITLE = $row['Title'];
            $CONTENT = $row['Content'];
        
            echo '
            <tr>
                <td>'. $DATE .'</td>
                <td>'. $TITLE .'</td>
                <td>'. $CONTENT .'</td>
            </tr>';
        }
    ?>
    
    </table>

    <br/>
    
    <center>
    <?php
        //�������X
        echo "<br /><a href=?page=1>����</a> ";
        
        for( $i=1 ; $i<=$pages ; $i++ ) {
            if ( $page-5 < $i && $i < $page+5 ) {
                echo "<a href=?page=".$i.">".$i."</a> ";
            }
        } 
        echo "<a href=?page=".$pages.">����</a>�A��". $page ."��/�@". $pages ."��<br/>";

        echo '�@ '.$data_nums.' ��';
    ?>
    </center>
</body>
</html>