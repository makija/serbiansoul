<?php
require_once '../config.php';
 
$tours = Admin::getTourList();
echo json_encode($tours);
