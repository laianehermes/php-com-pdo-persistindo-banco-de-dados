<?php

require_once 'autoload.php';

class Categoria
{

    public $id;
    public $nome;

    public function __construct($id = false)
    {
        if($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

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
            $this->nome = $linha['nome'];
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

    public function excluir($id) {
        $query = "DELETE FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->exec($query);
    }
}