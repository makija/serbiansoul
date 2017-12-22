<?php
require_once "../../config.php";

$tour=new Admin;

if (isset ($_POST['submit'])){
  $cat=$_POST['tourCat'];
  $name= $_POST['tourName'];
  $shortDesc= $_POST['shortDesc'];
  $desc= $_POST['tourDesc'];
  $program= $_POST['tourProgram'];
  $cover= $_POST['tourCover'];
  $gallery= $_POST['tourGallery'];
  isset ($_POST['longitude']) ? $long= $_POST['longitude'] : $long='';
  isset ($_POST['latitude']) ? $lat= $_POST['longitude'] : $lat='';
  isset ($_POST['spec']) ? $spec= $_POST['spec'] : $spec=0 ;
  isset ($_POST['priority']) ? $prior= $_POST['priority'] : $prior=1 ;
  $min=$_POST['min'];
  $max=$_POST['max'];
  $price=$_POST['price'];
  $disPrice=$_POST['disPrice'];
  $serv = $_POST['serviceChecked'];


}
$tourId= $tour->insertTour($cat,$name,$shortDesc,$desc,$program,$cover,$gallery,$spec,$prior,$long,$lat);

$keys = array('min', 'max', 'price', 'disPrice');
$values = array($min,$max,$price,$disPrice);
$p=array_combine($keys,$values);

for($i=0;$i<sizeof($min);$i++){
   $tour->insertPrice($tourId, $p['min'][$i], $p['max'][$i], $p['price'][$i] , $p['disPrice'][$i]);
}

foreach($serv as $s){
  $tour->insertService($tourId,$s);
}




 ?>
