<?php

require_once 'autoload.php';

try {
    $categoria = new Categoria();
    $categoria->nome = $_POST['nome'];
    $categoria->inserir($categoria->nome);
    
    header('Location: categorias.php');
    
} catch (Exception $error) {
    Erro::trataErro($error);
}
