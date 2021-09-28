<?php

namespace Core;

class Controller
{

  public function loadView($viewName, $viewData = array())
  {
    extract($viewData);
    require 'src/Views/' . $viewName . '.php';
  }

  public function loadTemplate($viewName, $viewData = array())
  {
    require 'src/Views/template.php';
  }

  public function loadViewInTemplate($viewName, $viewData = array())
  {
    extract($viewData);
    require 'src/Views/' . $viewName . '.php';
  }
}
