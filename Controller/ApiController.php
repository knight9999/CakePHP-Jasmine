<?php

App::uses('AppController', "Controller");

class ApiController extends AppController {

  public $uses = array();

  public function items() {
    $id = $this->params['id'];

    $name = "Not Found";
    switch ($id) {
      case 1:
        $name = "CakePHP";
        break;
      case 2:
        $name = "Jasmine";
        break;
      case 3:
        $name = "GoodLuck";
        break;
    }

    $data = array(
      'id' => $id,
      'name' => $name,
      'message' => "Hello!"
    );
    $this->viewClass = 'Json';
    $this->set( compact('data') );
    $this->set('_serialize','data');
  }

}

?>
