<?php

class adminController extends baseController {

  public function header(){
    $this->getAdmin('header');
  }

  public function home(){
    $this->header();
    $this->getAdmin('home');
    $this->footer();

  }

  public function newTour(){
    $this->header();

    $admin = new Admin;
    $admin->newTour();

    $this->getAdmin('newTour');
    $this->footer();
  }

  public function editTour(){
    $this->header();

    $id=$_GET['id'];//provera

    $this->tour=Tour::getTour($id);
    $this->prices = Tour::price($id);
    $this->services = Tour::getTourServices($id);

    $admin = new Admin;
    $this->services = $admin->renderServices($id);
    $admin->editTour($id);

    $this->getAdmin('editTour');


    $this->footer();
  }

  public function footer(){
    $this->getAdmin('footer');
  }


}


 ?>
