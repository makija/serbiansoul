<?php

class mainController extends baseController{

  public function header(){

    $this->categories = Category::getAll();

    $this->getView('header');
  }

  public function home(){

    $this->header();

    $this->tours=Tour::lowestPrice();
    $this->newTours=Tour::lowestPrice(' order by dateT desc limit 3');
    $this->disTours=Tour::lowestPrice(' order by dateT desc limit 3',' where special = 1 ');

    $this->getView('main');

    $this->footer();
  }

  public function toursList(){
    $this->header();

    $this->getView('list');

    $this->footer();
  }

  public function toursGrid(){
    $this->header();

   $id=$_GET['tour'];//provera
   $this->tours=Tour::lowestPrice(' order by priority',' where cat_id ='.$id);
   $this->getView('grid');

   $this->footer();
  }

  public function detail(){
    $this->header();

    $id=$_GET['id'];//provera
    $this->tour=Tour::getTour($id);
    $this->services=Tour::getTourServices($id);
    $this->prices=Tour::price($id);

    $gal=$this->tour->tour_gallery;
    $this->gallery=Tour::galleryRand($gal);

    $this->getView('detail');

    $this->footer();

  }

  public function about(){
    $this->getView('about');
  }

  public function footer(){
    $this->getView('footer');
  }

  public function test(){

$this->tours = Tour::getAll();

    $this->getView('test');
  }
}
