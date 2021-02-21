<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
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


    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaDoacao($id);
        $this->nome         =$row['nome'];
        $this->email        =$row['email'];
        $this->cpf          =$row['cpf'];
        $this->telefone        =$row['telefone'];
        $this->data_nascimento         =$row['data_nascimento'];
        $this->data_cadastro         =$row['data_cadastro'];
        $this->intervalo_doacao         =$row['intervalo_doacao'];
        $this->valor_doacao         =$row['valor_doacao'];
        $this->forma_pagamento         =$row['forma_pagamento'];
        $this->cep         =$row['cep'];
        $this->endereco         =$row['endereco'];
        $this->numero         =$row['numero'];
        $this->complemento         =$row['complemento'];
        $this->estado         =$row['estado'];
    }



    public function editarFormulario($nome,$email,$cpf,$telefone, $data_nascimento, $data_cadastro, $intervalo_doacao, $valor_doacao, $forma_pagamento, $cep, $endereco, $numero, $complemento, $estado,$id){
        if($this->editar->updateDoacao($nome,$email,$cpf,$telefone, $data_nascimento, $data_cadastro, $intervalo_doacao, $valor_doacao, $forma_pagamento, $cep, $endereco, $numero, $complemento, $estado,$id) == TRUE){
            echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
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


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['email'],$_POST['cpf'],$_POST['telefone'],$_POST['data_nascimento'],
        $_POST['data_cadastro'], $_POST['intervalo_doacao'], $_POST['forma_pagamento'], $_POST['valor_doacao'], $_POST['cep'],
        $_POST['endereco'], $_POST['numero'], $_POST['complemento'], $_POST['estado'], $_POST['id']);
}
?>
