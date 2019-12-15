<?php

require_once 'autoload.php';

try {
    $id = $_GET['id'];
    $categoria = new Categoria($id);
    $categoria->excluir($id);

    header('Location: categorias.php');
} catch (Exception $error) {
    Erro::trataErro($error);
}
