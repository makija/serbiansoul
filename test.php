<?php


 require_once "config.php";

// $t=new Admin;
// $p= $t->insertTour('2','tura','opis','opis','program','cover','gallery',0,1,5,6);
//
// $t->insertPrice($p,3,5,125,32);
// $t->insertService($p,3,5);

$a=  Tour::price(5);
print_r($a);

?>
