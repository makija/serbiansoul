<?php

require_once "config.php";

$controller = isset($_GET['mvcc'])?$_GET['mvcc'].'Controller':'mainController';
$method = isset($_GET['mvcm'])?$_GET['mvcm']:'home';

echo $controller;


$page= new $controller;
$page->$method();
