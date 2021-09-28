<?php

namespace Controllers;

use \Core\Controller;
use \Models\Contato;

class HomeController extends Controller
{

  public function index()
  {
    $array = array();

    $usuarios = new Contato();
    $array['lista'] = $usuarios->getAll();

    $this->loadTemplate('home', $array);
  }
}
