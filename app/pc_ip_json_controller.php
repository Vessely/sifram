<?php 
include("class/connection_class.php");
include("class/read_class.php");

$read_obj = new Read("select * from pc_table");
$read_obj->read();
?>