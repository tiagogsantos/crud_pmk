<?php
require_once("../model/cadastroDoacao.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setCPF($_POST['cpf']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setDataNascimento($_POST['data_nascimento']);
        $this->cadastro->setDataCadastro($_POST['data_cadastro']);
        $this->cadastro->setIntervaloDoacao($_POST['intervalo_doacao']);
        $this->cadastro->setValorDoacao($_POST['valor_doacao']);
        $this->cadastro->setFormaPagamento($_POST['forma_pagamento']);
        $this->cadastro->setCEP($_POST['cep']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setNumero($_POST['numero']);
        $this->cadastro->setComplemento($_POST['complemento']);
        $this->cadastro->setEstado($_POST['estado']);


        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Cadastro incluído com sucesso!!!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se a doação não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
