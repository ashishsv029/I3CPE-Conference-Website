<?php
error_reporting(E_ERROR|E_PARSE);
$email = '';
$name = '';
$phonenumber='';
session_start();

$email = $_POST['email'];
$name = $_POST['name'];
$phone=$_POST['phone'];
$data = $name.",".$email.",".$phone;
$file = "file2.csv";
file_put_contents($file, $data.PHP_EOL,FILE_APPEND);
print"<h1 align=center>Thank you for submitting your email</h1>";
?>
<html>
<head>
<title>Thank you page></title>
<body>
<h1><a href="logincustomized.html",text-decoration:none;>GO BACK</h1>
</body>
 </html>

