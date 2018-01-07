<?php


 require_once "config.php";

 $a= new Admin;


$x = $a->renderServices(2);





print_r($x);

?>


//$s= Tour::getTourServices(2);

// print_r($s);


// $array = [2,5,3];

// foreach($s as $p ){
//  if(!in_array($p['srv_id'],$array)){

//  	$a->deleteService(2,$p['srv_id']);

 	
//  }

// }