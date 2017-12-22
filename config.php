<?php
define ("DB","serbian_soul");
define ("HOST","localhost");
define ("USER","root");
define ("PASS","");
define ("PATH", dirname(__DIR__)."\belgradetours");

function __autoload ($class) {

  if(file_exists(PATH."/model/{$class}.php"))
 require_once PATH."/model/{$class}.php";

 else

 if(file_exists(PATH."/controllers/{$class}.php"))
require_once PATH."/controllers/{$class}.php";



}
