<?php

require_once "../config.php";

$id=$_POST['id'];
$a = new Admin;
$data = $a->renderPrices($id);


echo $data;





 ?>
