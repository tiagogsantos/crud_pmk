<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
<?php include("menu.php") ?>
<?php require_once("../controller/ControllerEditar.php");?>
<div class="container">
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="cadastro" class="col-12">
            <div class="form-group">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">E-mail:</label>
                    <input class="form-control" type="text" id="email" name="email" value="<?php echo $editar->getEmail(); ?>" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">CPF:</label>
                    <input class="form-control" type="text" id="cpf" name="cpf" value="<?php echo $editar->getCPF(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefone:</label>
                    <input class="form-control" type="text" id="telefone" name="telefone" value="<?php echo $editar->getTelefone(); ?>" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Data de Nascimento:</label>
                    <input class="form-control" type="text" id="data_nascimento" name="data_nascimento" value="<?php echo $editar->getDataNascimento(); ?>" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Data de Cadastro:</label>
                    <input class="form-control" type="text" id="data_cadastro" name="data_cadastro" value="<?php echo $editar->getDataCadastro(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Intervalo de Doação:</label>
                    <input class="form-control" type="text" id="intervalo_doacao" name="intervalo_doacao" value="<?php echo $editar->getIntervaloDoacao(); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Forma de Pagamento:</label>
                    <input class="form-control" type="text" id="forma_pagamento" name="forma_pagamento" value="<?php echo $editar->getFormaPagamento(); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Valor da doação:</label>
                    <input class="form-control" type="text" id="valor_doacao" name="valor_doacao" value="<?php echo $editar->getValorDoacao(); ?>">
                </div>
                <label for="exampleFormControlInput1"><strong>Endereço:</strong></label>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="exampleFormControlInput1">CEP:</label>
                        <input class="form-control" type="text" id="cep_code" name="cep" value="<?php echo $editar->getCEP(); ?>">
                    </div>
                    <div class="col-md-8">
                        <label for="exampleFormControlInput1">Logradouro:</label>
                        <input class="form-control" type="text" id="endereco" name="endereco" value="<?php echo $editar->getEndereco(); ?>">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col">
                        <label for="exampleFormControlInput1">Numero:</label>
                        <input class="form-control" type="text" id="numero" name="numero" value="<?php echo $editar->getNumero(); ?>">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1">Complemento:</label>
                        <input class="form-control" type="text" id="complemento" name="complemento" value="<?php echo $editar->getComplemento(); ?>">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col">
                        <label for="exampleFormControlInput1">Estado:</label>
                        <input class="form-control" type="text" id="estado" name="estado" value="<?php echo $editar->getEstado(); ?>">
                    </div>
                </div>
                <div class="form-group mt-4">
                    <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                    <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Atualizar doação</button>
                </div>
            </div>
        </form>
    </div>
</div>
</script>
</body>
</html>