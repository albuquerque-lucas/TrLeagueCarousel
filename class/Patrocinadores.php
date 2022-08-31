<?php

class Patrocinadores {


    private $mysql;
    
    public function __construct(mysqli $mysql){
        $this->mysql = $mysql;
    }




    public function listaPatrocinio():array{

        $resultado = $this->mysql->query("SELECT * FROM tbpatrocinadores");
        $carrossel = $resultado->fetch_all(MYSQLI_ASSOC);
        return $carrossel;
    }

    public function adicionaPatrocinio(string $nome, string $imagem_nome){

        $adicionar = $this->mysql->prepare("INSERT INTO tbpatrocinadores (nome, imagem_nome) VALUES (?, ?)");
        $adicionar->bind_param('ss', $nome, $imagem_nome);
        $adicionar->execute();


    }

    public function excluiPatrocinio (int $id):void{

        $remover = $this->mysql->prepare("DELETE FROM tbpatrocinadores WHERE id = ?");
        $remover->bind_param('i', $id);
        $remover->execute();

    }








}