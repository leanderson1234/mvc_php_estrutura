<?php

namespace Models;

use \Core\Model;

class Contato extends Model
{
  public function getAll()
  {
    $array = array();

    $sql = "SELECT * FROM contato";
    $sql = $this->db->query($sql);

    if ($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }
}
