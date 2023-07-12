<?php

class App
{
  // menambahkan property baru dengan nilai default
  protected $controller = 'home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();

    // controller
    if (file_exists('../app/controllers/' . $url[0] . '.php')) {
      $this->controller = $url[0];
      unset($url[0]);
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    //method
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    //params 
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // fungsi - jalankan controller & method, serta berikan params jika ada 
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  // method - bertugas mengambil url dan memecah sesuai keinginan 
  public function parseURL()
  {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = explode('/', $url);
    } else {
      $url = [$this->controller];
    }
    return $url;
  }
}
