<?php

namespace Controllers;

use Core\Controller;
use Models\Contato;

class ContatoController extends Controller
{
  public function add()
  {
    $dados = array();
    $this->loadTemplate('addcontato', $dados);
  }
  public function add_save()
  {
    if (!empty($_POST['nome'])) {
      $nome = $_POST['nome'];
      $contato = new Contato();
      $contato->add($nome);
      header("Location: " . BASE_URL);
    }
  }
}
