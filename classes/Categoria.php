<?php

require_once 'classes/Conexao.php';

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar() {
        $query = "SELECT id, nome FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            return $linha;
        }
    }

    public function inserir($nome) {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $nome . "')";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->exec($query);
    }

    public function atualizar() {
        $query = "UPDATE categorias SET nome = '" . $this->nome . "' WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->exec($query);
    }
}