<?php

App::uses('AppController', "Controller");

class FixturesController extends AppController {

  public $uses = array();

  public function dummy() {
    try {
      $this->render('dummy');
    } catch (MissingViewException $e) {
      if (Configure::read('debug')) {
        throw $e;
      }
      throw new NotFoundException();
    }
  }


}

 ?>
