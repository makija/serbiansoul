<?php

require_once "../config.php";

$id=$_POST['id'];
$p= Tour::price($id);

echo json_encode($p);





 ?>
