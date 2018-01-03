<?php

require_once "config.php";

$controller = isset($_GET['mvcc'])?$_GET['mvcc'].'Controller':'mainController';
$method = isset($_GET['mvcm'])?$_GET['mvcm']:'home';

echo $controller;


$page= new $controller;
$page->$method();



// public function renderPrices($id){

//   $html = '';
//   $prices =Tour::price($id);
//   $i= 0;
//   $class='';
//   $classIcon='';

//   foreach($prices as $price){
//     $i++;
   

//   ($i==1)? $classIcon = 'icon-plus': $classIcon = 'icon-minus';
//   ($i==1)? $class = 'btnPlusEdit': $class = 'btnMinus';

//     $html.=' <div class="row divCena">
//         <div class="col-md-10">
//           <p class="h6">Cena 1
//           </p>
//         </div>
//         <div class="col-md-2 cenaPlus">
//           <button type="button" class="btn btn-secondary '.$class.'"> <i class="'.$classIcon.'"></i> </button>
//         </div>

//         <div class="col-md-3">
//           <p>Grupa</p>
//           <select name="min[]" class="custom-select minimum" >
//             <option selected value= '.$price['min_people'].' >'.$price['min_people'].'</option>
//             <option disabled >Min people</option>
//           </select>

//         </div>

//         <div class="col-md-3">
//           <p>Grupa</p>
//           <select name=max[] class="custom-select maximum" >
//            <option selected value= '.$price['max_people'].' >'.$price['max_people'].'</option>
//             <option  disabled>Max ljudi</option>

//           </select>

//         </div>

//         <div class=" col-md-2 price">
//           <p>Cena</p>
//           <input name="price[]" type="text" class="form-control" value="'.$price['price'].'">
//         </div>

//         <div class=" col-md-2 price">
//           <p>Cena %</p>
//           <input name = "disPrice[]" type="text" class="form-control" value="'.$price['dis_price'].'" >
//         </div>

//       </div>';
//   }

// return $html;
// }
