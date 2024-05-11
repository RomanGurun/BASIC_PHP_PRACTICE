<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$servername="localhost";
$username="root";
$psw="";
$db="dbharry";
$conn=new mysqli($servername,$username,$psw,$db);


if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}


echo("Database connected succsessfully");
echo"<pre>";

print_r($conn); 


  








?>



</body>
</html>