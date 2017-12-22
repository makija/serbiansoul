<?php


abstract class Records{

  public static function getAll($filter=''){
    $q= Database::connection()->query('select * from '. static::$table .' '.$filter);

    $res=[];
    $q->setFetchMode(PDO::FETCH_CLASS, get_called_class());

    while($rw=$q->fetch()){
      $res[]=$rw;
    }
    return $res;

  }

public function insert(){
  $fields = get_object_vars($this);
  $keys=array_keys($fields);
  $values=array_values($fields);

  print_r($keys);
  print_r($values);
}


}



 ?>
