<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php require("database_info.php");  
$Name = $_POST[txtName];
 $Email = $_POST[txtEmail];    
 $Genders = $_POST[Genders]; 
$Referrers = $_POST[Referrers];
 $Comment = $_POST[txtComment];
 mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้"); mysql_select_db($dbname)or die("ติดต่อฐานข้อมูลไม่ได้"); $sql="INSERT INTO addcomment(Name,Email,Genders,Referrers,Comment) VALUES('$Name','$Email','$Genders','$Referrers','$Comment') "; setthai(); mysql_query($sql); echo"บันทึกข้อมูลลงฐานข้อมูลแล้ว"."<br>";

 mysql_close(); ?>
 <center> <a href="showComment.php">"แสดงข้อมมูล"; </a></center>
</body>
</html>