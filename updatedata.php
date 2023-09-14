<?php
$stu_id = $_POST['sid']; 
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$Connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
    
    
$Sql_Query = "UPDATE student SET std_name = '{$stu_name}',std_address = '{$stu_address}',std_class = '{$stu_class}',std_phone = '{$stu_phone}' WHERE std_id = '{$stu_id}'";

$result = mysqli_query($Connection, $Sql_Query) or die("Query Failed");

header('location: http://localhost/Crud Yahoo/index.php');

mysqli_close($Connection);


?>