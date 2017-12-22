
<?php


class Destinacija extends ActiveRecord {

/*  public $idDestinacije;*/
  public $idRegije;
  public $naziv;
  public $opis;
  public $galerijaSlika;

public static $table="destinacije";
public static $key="idDestinacije";




static function navigacija(){

 $dest=self::getAll("where idRegije=". $_GET['idRegije']);

foreach ($dest as $destinacija) {

 echo  "<li> <a href='?page=page&idRegije=".$destinacija->idRegije."&idDestinacije=".$destinacija->idDestinacije."'>".$destinacija->naziv."</a></li>";

}

}



public function createDest(){

  if (isset($_POST['createDest'])){


  $this->idRegije = $_GET['idRegije'];
  $this->naziv = $_POST['newDest'];
  $this->opis = $_POST['newOpis'];

  $dir1 =strtolower($this->naziv);
  $dir  =str_replace(' ','-',$dir1);

  $this->galerijaSlika = $dir;

  $this->insert();
  $this->makeDir();

  $podDir= $this->galerijaSlika;
  $a= new Apartman;
  $a->makeDir($podDir);

}
}


public function upDate(){

  if(isset($_POST['Update'])){
  $this->idDestinacije=$_GET['idDestinacije'];
  $this->opis= $_POST['opisDest'];
  $this->naziv= $_POST['destName'];
  $this->save();





}
}





}





