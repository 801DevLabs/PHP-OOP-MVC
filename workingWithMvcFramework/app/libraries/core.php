<?php

  // * APP CORE CLASS
  // * CREATES URL AND LOADS CORE CONTROLLER
  // * URL FORMAT - /controller/method/params

  class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
      //print_r($this->getUrl());

      $url = $this->getUrl();

      // LOOK IN CONTROLLERS FOR FIRST VALUE
      if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
        // IF EXSISTS, SET AS CONTROLLER
        $this->currentController = ucwords($url[0]);
        // UNSET 0 INDEX
        unset($url[0]);
      }

      // REQUIRE THE CONTROLLER
      require_once '../app/controllers/'. $this->currentController . '.php';

      // INSTANTIATE CONTROLLER CLASS
      $this->currentController = new $this->currentController;
    }

    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }
  }