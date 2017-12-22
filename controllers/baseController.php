<?php

class baseController{

  
public function getView($view){
  require "view/{$view}.php";
}

public function index(){
  echo 'No index included';
}

public function getAdmin($view){
  require "view/admin/{$view}.php";


}

}





 ?>
