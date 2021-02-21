<?php

error_reporting(0);

require_once("../model/banco.php");

class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){

        $row = $this->lista->getDoacao();

        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['email'] ."</td>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['data_nascimento'] ."</td>";
            echo "<td>".$value['data_cadastro'] ."</td>";
            echo "<td>".$value['intervalo_doacao'] ."</td>";
            echo "<td>".$value['valor_doacao'] ."</td>";
            echo "<td>R$ ".$value['forma_pagamento'] ."</td>";
            echo "<td>".$value['endereco'] ."</td>";
            echo "<td>".$value['cep'] ."</td>";
            echo "<td>".$value['numero'] ."</td>";
            echo "<td>".$value['complemento'] ."</td>";
            echo "<td>".$value['estado'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }


    }
}

