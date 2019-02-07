<?php

  // * BASE CONTROLLER
  // * LOADS THE MODELS AND VIEWS

  class Controller {
    // LOAD MODEL
    public function model($model){
      // Require model file
      require_once '../app/models/' . $model . '.php';

      // INSTATIATE MODEL
      return new $model();
    }

    // LOAD VIEW
    public function view($view, $data = []){
      // CHECK FOR VIEW FILE
      if(file_exists('../app/views' . $view . '.php')){
        require_once '../app/views' . $view . '.php';
      } else {
        // VIEW DOES NOT EXIST
        die('View does not exist');
      }
    }
  }