<?php


 require_once "config.php";

$t=new Admin;
$p= $t->renderServices(2);

echo $p;


?>

