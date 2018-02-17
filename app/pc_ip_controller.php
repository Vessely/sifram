<?php 

include("class/connection_class.php");
include("class/create_class.php");

//Recoger las variables por post.
$name    = $_POST["name"];
$ip      = $_POST["ip"];
$pc_date = date("j-m-Y");

$query   = "INSERT INTO pc_table (ip, pc_name, pc_date) VALUES ('$name', '$ip', '$pc_date')";

$create  = new Create;
echo $create->create($query);


 ?>