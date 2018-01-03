<?php

class Admin {

  public static function getTourList(){
    $db=Database::connection();
    $q= $db->prepare('select categories.cat_id, categories.cat_name, tours.tour_id, tours.tour_name from tours join categories using(cat_id) order by cat_id desc');
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $q->execute();

    $list=[];
    while($rw=$q->fetch()){
      $list[]=$rw;
    }

    return $list;
  }

  public static function getServices(){
    $db = Database::connection();
    $q=$db->prepare('select * from services order by srv_prior');
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $q->execute();

    $serv=[];
    while($rw=$q->fetch()){
      $serv[]=$rw;
    }
    return $serv;
  }

  public function insertTour($cat,$name,$shortDesc,$desc,$program,$cover,$gallery,$spec=0,$prior=1,$long='',$lat=''){

  $db=Database::connection();
  $q= $db->prepare('INSERT into tours SET
    tour_name= :name,
    tour_shortDesc= :shortDesc,
    tour_desc= :description,
    tour_program = :program,
    tour_cover= :cover,
    tour_gallery= :gallery,
    special= :spec,
    cat_id= :cat,
    priority= :prior,
    dateT=now(),
    longitude= :long,
    latitude= :lat');

  $q->bindParam(":name", $name ,PDO::PARAM_STR);
  $q->bindParam(":shortDesc", $shortDesc ,PDO::PARAM_STR);
  $q->bindParam(":description", $desc ,PDO::PARAM_STR);
  $q->bindParam(":program", $program ,PDO::PARAM_STR);
  $q->bindParam(":cover", $cover ,PDO::PARAM_STR);
  $q->bindParam(":gallery", $gallery ,PDO::PARAM_STR);
  $q->bindParam(":spec", $spec ,PDO::PARAM_STR);
  $q->bindParam(":prior", $prior ,PDO::PARAM_STR);
  $q->bindParam(":cat", $cat ,PDO::PARAM_STR);
  $q->bindParam(":long", $long ,PDO::PARAM_STR);
  $q->bindParam(":lat", $lat ,PDO::PARAM_STR);

  $q->execute();

  $lastId = $db->lastInsertId();
  return $lastId;

  }

  public function insertPrice($tourID,$min,$max,$price,$dis){
    $db=Database::connection();
    $q= $db->prepare('INSERT into prices SET
      tour_id = :tourID,
      min_people = :min,
      max_people = :max,
      price = :price,
      dis_price = :dis');
   $q->bindParam(":tourID", $tourID, PDO::PARAM_STR);
   $q->bindParam(":min", $min, PDO::PARAM_STR);
   $q->bindParam(":max", $max, PDO::PARAM_STR);
   $q->bindParam(":price", $price, PDO::PARAM_STR);
   $q->bindParam(":dis", $dis, PDO::PARAM_STR);

   $q->execute();



  }

  public function insertService($tourID,$srvID,$descript=''){
    $db=Database::connection();
    $q= $db->prepare('INSERT into tour_service SET
       tour_id = :tourID,
       srv_id = :srvID,
       spec_srv_desc = :descript');

        $q->bindParam(":tourID", $tourID, PDO::PARAM_STR);
        $q->bindParam(":srvID", $srvID, PDO::PARAM_STR);
        $q->bindParam(":descript", $descript, PDO::PARAM_STR);

        $q->execute();



  }

  public function insertServDesc($tourId,$srvId,$descript){
    $db=Database::connection();
    $q= $db->prepare('UPDATE tour_service SET
       spec_srv_desc = :descript where tour_id = :tourID and
       srv_id = :srvID');

        $q->bindParam(":tourID", $tourId, PDO::PARAM_INT);
        $q->bindParam(":srvID", $srvId, PDO::PARAM_INT);
        $q->bindParam(":descript", $descript, PDO::PARAM_STR);

        $q->execute();



  }

  public function saveTour($tourId, $cat,$name,$shortDesc,$desc,$program,$cover,$gallery,$spec=0,$prior=1,$long='',$lat=''){
    $db=Database::connection();
    $q= $db->prepare('UPDATE `tours` SET
      tour_name= :name,
      tour_shortDesc= :shortDesc,
      tour_desc= :description,
      tour_program = :program,
      tour_cover= :cover,
      tour_gallery= :gallery,
      special= :spec,
      cat_id= :cat,
      priority= :prior,
      dateT=now(),
      longitude= :long,
      latitude= :lat where tour_id = :tourId');

      $q->bindParam(":tourId", $tourId ,PDO::PARAM_STR);
      $q->bindParam(":name", $name ,PDO::PARAM_STR);
      $q->bindParam(":shortDesc", $shortDesc ,PDO::PARAM_STR);
      $q->bindParam(":description", $desc ,PDO::PARAM_STR);
      $q->bindParam(":program", $program ,PDO::PARAM_STR);
      $q->bindParam(":cover", $cover ,PDO::PARAM_STR);
      $q->bindParam(":gallery", $gallery ,PDO::PARAM_STR);
      $q->bindParam(":spec", $spec ,PDO::PARAM_STR);
      $q->bindParam(":prior", $prior ,PDO::PARAM_STR);
      $q->bindParam(":cat", $cat ,PDO::PARAM_STR);
      $q->bindParam(":long", $long ,PDO::PARAM_STR);
      $q->bindParam(":lat", $lat ,PDO::PARAM_STR);

      $q->execute();


  }

  public function updatePrice($priceID, $tourID,$min,$max,$price,$dis=''){
    $db=Database::connection();
    $q= $db->prepare('UPDATE prices SET
      min_people = :min,
      max_people = :max,
      price = :price,
      dis_price = :dis where price_id = :priceID and tour_id = :tourID');
  $q->bindParam(":priceID", $priceID, PDO::PARAM_STR);
   $q->bindParam(":tourID", $tourID, PDO::PARAM_STR);
   $q->bindParam(":min", $min, PDO::PARAM_STR);
   $q->bindParam(":max", $max, PDO::PARAM_STR);
   $q->bindParam(":price", $price, PDO::PARAM_STR);
   $q->bindParam(":dis", $dis, PDO::PARAM_STR);

   $q->execute();
  }



  public function newTour(){
    if (isset ($_POST['newTour'])){

      isset ($_POST['longitude']) ? $long= $_POST['longitude'] : $long='';
      isset ($_POST['latitude']) ? $lat= $_POST['latitude'] : $lat='';
      isset ($_POST['spec']) ? $spec= $_POST['spec'] : $spec=0 ;
      isset ($_POST['priority']) ? $prior= $_POST['priority'] : $prior=1 ;

    $tourId= $this->insertTour($_POST['tourCat'], $_POST['tourName'], $_POST['shortDesc'], $_POST['tourDesc'], $_POST['tourProgram'], $_POST['tourCover'], $_POST['tourGallery'], $spec, $prior, $long, $lat);

    $keys = array('priceId', 'min', 'max', 'price', 'disPrice');
    $values = array($_POST['priceId'], $_POST['min'], $_POST['max'], $_POST['price'], $_POST['disPrice']);
    $p=array_combine($keys,$values);

    for($i=0;$i<sizeof($_POST['min']);$i++){
       $this->insertPrice($tourId, $p['min'][$i], $p['max'][$i], $p['price'][$i] , $p['disPrice'][$i]);
    }

    foreach( $_POST['serviceChecked'] as $serv){
      $this->insertService($tourId,$serv);
    }


    if (isset($_POST['srvDescId'])&&isset($_POST['srvDesc'])){
    $k= ['srvDescId','srvDesc'];
    $v= [$_POST['srvDescId'],$_POST['srvDesc']];

    $srv= array_combine($k,$v);

    

    for($i=0;$i<sizeof($_POST['srvDescId']);$i++){

      $this->insertServDesc($tourId, $srv['srvDescId'][$i], $srv['srvDesc'][$i]);
    }

    }

     if(!is_dir("view/images/galleries/".$_POST['tourGallery'])){

       mkdir("view/images/galleries/".$_POST['tourGallery']);
     }


  }
}

public function editTour(){
  if (isset ($_POST['editTour'])){

    isset ($_POST['longitude']) ? $long= $_POST['longitude'] : $long='';
    isset ($_POST['latitude']) ? $lat= $_POST['latitude'] : $lat='';
    isset ($_POST['spec']) ? $spec= $_POST['spec'] : $spec=0 ;
    isset ($_POST['priority']) ? $prior= $_POST['priority'] : $prior=1 ;

   $this->saveTour($_GET['id'],$_POST['tourCat'], $_POST['tourName'], $_POST['shortDesc'], $_POST['tourDesc'], $_POST['tourProgram'], $_POST['tourCover'], $_POST['tourGallery'], $spec, $prior, $long, $lat);

  $keys = array('priceId','min', 'max', 'price', 'disPrice');
  $values = array($_POST['priceId'], $_POST['min'],$_POST['max'],$_POST['price'],$_POST['disPrice']);
  $p=array_combine($keys,$values);



  for($i=0;$i<sizeof($_POST['min']);$i++){
     $this->updatePrice($p['priceId'][$i], $_GET['id'], $p['min'][$i], $p['max'][$i], $p['price'][$i] , $p['disPrice'][$i]);
  }

  //
  // foreach( $_POST['serviceChecked'] as $serv){
  //   $this->insertService($tourId,$serv);
  // }
  //
  // $k= ['srvDescId','srvDesc'];
  // $v= [$_POST['srvDescId'],$_POST['srvDesc']];
  //
  // $srv= array_combine($k,$v);
  //
  // print_r($srv);
  //
  // for($i=0;$i<sizeof($_POST['srvDescId']);$i++){
  //
  //   $this->insertServDesc($tourId, $srv['srvDescId'][$i], $srv['srvDesc'][$i]);
  // }


}
}

public function renderServices($id){
  $i=0;

  $html = ' <div class="col-md-4">';

  $selectedServices=Tour::getTourServices($id);
  
  $servicesAll = self::getServices();
  $checked=[];

  foreach ($selectedServices as $srv) {
   $checked[]= $srv['srv_id'];
  }


  foreach($servicesAll as $service){
    ++$i;
    

    

    (in_array($service['srv_id'],$checked)) ? $isChecked='checked': $isChecked='';

    $html.= "<div class='form-check'><label class='form-check-label'><input ".$isChecked." name ='serviceChecked[]' class='form-check-input' type='checkbox' value=".$service['srv_id']."><i class=" .$service['srv_icon']. "></i>" .$service['srv_name']. "</label></div>";

    
     if(($i%5)==0) {$html.='</div><div class="col-md-4">';}


  }

$html.='</div>';


return $html;
  



}
}
 ?>
