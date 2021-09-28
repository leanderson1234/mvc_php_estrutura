<h3>Lista</h3>
<a href="<?php echo BASE_URL ?>contato/add">Cadastrar Contato </a>
<?php
foreach ($lista as $item) {
  echo "NOME: " . $item['nome'] . "<br/>";
}
?>