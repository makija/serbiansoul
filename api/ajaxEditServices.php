<?php

require_once "../config.php";

$id = $_POST['id'];

$t=new Admin;
$p= $t->renderServices($id);

echo $p;