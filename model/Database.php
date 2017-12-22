<?php

class Database {
 private static $conn=null;


 static function connection(){
  if(!self::$conn){
    self::$conn= new PDO ("mysql:host=".HOST.";dbname=".DB .";charset=utf8", USER, PASS);
  }
  return self::$conn;
 }

}

 ?>
