<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>俄乌冲突相关链接</title>
<style type="text/css">
		table{
				width:60%;
				margin: 50px auto;
				border-collapse: collapse;/*让靠在一起的单元格只显示一个边框，边框不进行叠加*/
			}
			
			table tr th{
				font-size:20px;
				border: solid 1px #000;
				height: 30px;
				width: 200px;
				background-color: #eee;
			}
			
			table tr td{
				font-size:10px;
				border: solid 1px #000;
				height: 30px;
				text-align: center;
			}
			
			table tr:hover
			{
				background-color:#c0bcbc;/*hover:鼠标移上去就会变成红色*/
			}
</style>
</head>

<body>
<?php
    require("../componets/coon.php");	
    $sql="SELECT DISTINCT SOURCEURL FROM export_rus_ukr limit 100";
    $res=mysqli_query($link,$sql);
?>
<table>
<tr>
<th>链接</th>
</tr>
<?php
	while($row=mysqli_fetch_assoc($res))
	{
		echo "
			<tr>
				<td>{$row['SOURCEURL']}</td>
				</tr>
			";	
	}
?>
</table>
</body>
</html>