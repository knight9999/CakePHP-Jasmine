<?php

App::uses('AppController' , "Controller");

class MainController extends AppController {

  public $uses = array();

  public function index() {
    try {
      $this->render('index');
    } catch (MissingViewException $e) {
      if (Configure::read('debug')) {
        throw $e;
      }
      throw new NotFoundException();
    }
  }


}

 ?>
