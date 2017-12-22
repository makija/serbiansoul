<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

	<?php

	require_once "config.php";



	$controller = isset($_GET['ctrl'])?$_GET['ctrl'].'Controller':'mainController';
	$method = isset($_GET['ctrlm'])?$_GET['ctrlm']:'home';


	$page= new $controller;
	$page->$method();


 ?>
	<!-- End footer -->

	
</html>
