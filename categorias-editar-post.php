<?php

require_once 'autoload.php';

try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    
    $categoria = new Categoria($id);
    $categoria->nome = $nome;
    $categoria->atualizar();
    
    header('Location: categorias.php');
    
} catch (Exception $error) {
    Erro::trataErro($error);
}