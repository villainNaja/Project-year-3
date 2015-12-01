
<?php   
 require("database_info.php");    
 $ID = $_POST[textfield];  
 $Name = $_POST[textfield2];  
 $Address = $_POST[textarea];  
 $Birthday = $_POST[textfield3];  
 
 mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้");  
 mysql_select_db($dbname)or die("ติดต่อฐานข้อมูลไม่ได้");  
 $sql="INSERT INTO student(ID,Name,Address,Birthday)          VALUES('$ID','$Name','$Address','$Birthday')"; 
 
  setthai(); 
  
   mysql_query($sql); 
   echo"บันทึกข้อมูลลงฐานข้อมูลแล้ว"; 
  mysql_close(); 
   ?>
