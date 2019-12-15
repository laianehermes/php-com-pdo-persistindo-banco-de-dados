<?php

require_once 'autoload.php';

$categoria = new Categoria();
$categoria->nome = $_POST['nome'];
$categoria->inserir($categoria->nome);

header('Location: categorias.php');