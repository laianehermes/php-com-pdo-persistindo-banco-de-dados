<?php

require_once 'classes/Categoria.php';

$id = $_GET['id'];
$categoria = new Categoria($id);
$categoria->excluir($id);

header('Location: categorias.php');
