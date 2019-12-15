<?php

require_once 'autoload.php';

$id = $_GET['id'];
$categoria = new Categoria($id);
$categoria->excluir($id);

header('Location: categorias.php');
