<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

$Connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
    
    
$Sql_Query = "INSERT INTO student(std_name,std_address,std_class,std_phone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($Connection, $Sql_Query) or die("Query Failed");

header('location: http://localhost/Crud Yahoo/index.php');

mysqli_close($Connection);

?>