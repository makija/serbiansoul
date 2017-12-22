<?php
require_once "../config.php";

$cat=Category::getAll();
echo json_encode($cat);
 ?>
