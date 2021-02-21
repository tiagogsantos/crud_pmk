<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $data_nascimento;
    private $data_cadastro;
    private $intervalo_doacao;
    private $valor_doacao;
    private $forma_pagamento;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $estado;   

 

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }

    public function setEmail($string){
        $this->email = $string;
    }

    public function setCPF($string){
        $this->cpf = $string;
    }

    public function setTelefone($string){
        $this->telefone = $string;
    }

    public function setDataNascimento($string){
        $this->data_nascimento = $string;
    }

    public function setDataCadastro($string){
        $this->data_cadastro = $string;
    }
  
    public function setIntervaloDoacao($string){
        $this->intervalo_doacao = $string;
    }
    public function setValorDoacao($string){
        $this->valor_doacao = $string;
    }

    public function setFormaPagamento($string){
        $this->valor_doacao = $string;
    }

    public function setCEP($string){
        $this->cep = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setNumero($string){
        $this->numero = $string;
    }
    public function setComplemento($string){
        $this->complemento = $string;
    }
    public function setEstado($string){
        $this->estado = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCPF(){
        return $this->cpf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getDataNascimento(){
        return $this->data_nascimento;
    }
    public function getDataCadastro(){
        return $this->data_cadastro;
    }
    public function getIntervaloDoacao(){
        return $this->intervalo_doacao;
    }

    public function getFormaPagamento(){
        return $this->forma_pagamento;
    }

    public function getValorDoacao(){
        return $this->valor_doacao;
    }

    public function getCEP(){
        return $this->cep;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getEstado(){
        return $this->estado;
    }


    public function incluir(){
        return $this->setDoacao($this->getNome(),$this->getEmail(),$this->getCPF(),$this->getTelefone(),$this->getDataNascimento(),
        $this->getDataCadastro(), $this->getIntervaloDoacao(), $this->getFormaPagamento(), $this->getValorDoacao(), $this->getCEP(), $this->getEndereco(),
        $this->getNumero(), $this->getComplemento(), $this->getEstado());
    }
}

?>
