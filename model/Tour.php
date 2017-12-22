<?php



class Tour extends Records{

  public $tour_id;
  public $cat_id;
  public $tour_name;
  public $tour_shortDesc;
  public $tour_desc;
  public $tour_program;
  public $tour_cover;
  public $tour_gallery;
  public $tour_duration;
  public $special;
  public $priority;
  public $dateT;
  public $longitude;
  public $latitude;

  public static $table ='tours';
  public static $key = 'tour_id';


  public static function lowestPrice($order='', $where=''){
   $db=Database::connection();
   $query= $db->prepare('select tours.*,min(price) as lowestPrice, min(dis_price) as dis from tours left join prices using(tour_id) '. $where .' group by tour_id'. $order);
   $query->setFetchMode(PDO::FETCH_CLASS, 'Tour');
   $query->execute();

   $arr=[];
   while($rw = $query->fetch()){
     $arr[]=$rw;
   }
   return $arr;
  }

  public static function getTour($id){
    $db=Database::connection();
    $query= $db->prepare('SELECT categories.cat_name, tours.* from tours join categories using(cat_id) where tour_id= :id');
    $query->bindParam(":id", $id, PDO::PARAM_STR);
    $query->setFetchMode(PDO::FETCH_CLASS, 'Tour');
    $query->execute();

    $tour=$query->fetch();

    return $tour;
  }

  public static function price($id){
    $db=Database::connection();
    $query= $db->prepare('select prices.price_id, prices.min_people, prices.max_people, prices.price from serbian_soul.prices where tour_id= :id order by min_people');
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();

    $prc=[];

     while($rw=$query->fetch()){
       $prc[]=$rw;
     }
     return $prc;
  }

  public static function getTourServices($id){
  $db=Database::connection();
  $query= $db->prepare('select services.*,tour_service.spec_srv_desc from tour_service join tours using(tour_id) join services using (srv_id) where tour_id='.$id.' order by srv_prior ');
  $query->setFetchMode(PDO::FETCH_ASSOC);
  $query->execute();

 $srv=[];

  while($rw=$query->fetch()){
    $srv[]=$rw;
  }
  return $srv;
  }

  public static function galleryRand($dir){
    $images= scandir("view/images/galleries/".$dir);
                  $arr=[];
                   foreach ($images as $image ) {
                   if ( $image != "." && $image != ".." && $image != 'thumb' ){
                     $arr[]=$image;
  }


}
  return $arr;



}
}
