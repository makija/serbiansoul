<?php
define ("DB","serbian_soul");
define ("HOST","localhost");
define ("USER","marija");
define ("PASS","123");
define ("PATH", dirname(__DIR__).'/serbiansoul');
define ("PATHA", dirname(__DIR__).'/serbiansoul/?ctrl=admin');

function __autoload ($class) {

  if(file_exists(PATH."/model/{$class}.php"))
 require_once PATH."/model/{$class}.php";

 else

 if(file_exists(PATH."/controllers/{$class}.php"))
require_once PATH."/controllers/{$class}.php";



}
