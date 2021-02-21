<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDoacao($nome,$email,$cpf,$telefone, $data_nascimento, $data_cadastro, $intervalo_doacao, $valor_doacao, $forma_pagamento, $cep, $endereco, $numero, $complemento, $estado){
        $stmt = $this->mysqli->prepare("INSERT INTO doacao (`nome`, `email`, `cpf`, `telefone`, `data_nascimento`, `data_cadastro`, `intervalo_doacao`, `valor_doacao`, `forma_pagamento`, `cep`, `endereco`, `numero`, `complemento`, `estado`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssssssss",$nome,$email,$cpf,$telefone,$data_nascimento, $data_cadastro, $intervalo_doacao, $valor_doacao, $forma_pagamento, $cep, $endereco, $numero, $complemento, $estado);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }  
    }

    public function getDoacao(){
        $result = $this->mysqli->query("SELECT * FROM doacao");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteDoacao($id){
        if($this->mysqli->query("DELETE FROM `doacao` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaDoacao($id){
        $result = $this->mysqli->query("SELECT * FROM doacao WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateDoacao($nome,$email,$cpf,$telefone, $data_nascimento,$data_cadastro, $intervalo_doacao, $valor_doacao, $forma_pagamento, $cep, $endereco, $numero, $complemento, $estado,$id){
        $stmt = $this->mysqli->prepare("UPDATE `doacao` SET `nome` = ?, `email`=?, `cpf`=?, `telefone`=?, `data_nascimento`=?, `data_cadastro`=?, `intervalo_doacao`=?, `valor_doacao`=?, `forma_pagamento`=?, `cep`=?, `endereco`=?, `numero`=?, `complemento`=?, `estado` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssssssssssss",$nome,$email,$cpf,$telefone, $data_nascimento,$data_cadastro, $intervalo_doacao, $valor_doacao, $forma_pagamento, $cep, $endereco, $numero, $complemento, $estado, $id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
