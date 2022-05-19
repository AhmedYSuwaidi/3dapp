<?php
include("connect.php");

$title= $_POST['titlecol'];
$desc=$_POST['desccol'];
$adddate=date('Y-m-d');



$sql ="insert into products(title,description,created_at) values ('".$title."','".$desc."','".$adddate."')";

mysqli_query($conn,$sql);


?>