<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
<?php include("menu.php") ?>
<div class="container">
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="cadastro" class="col-12">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Livro">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="CPF">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="data_cadastro" name="data_cadastro" placeholder="Data de Cadastro">
            </div>
            <div class="form-group">
                <select class="custom-select" id="intervalo_doacao" name="intervalo_doacao">
                    <option selected>Selecione um intervalo</option>
                    <option value="unico">Único</option>
                    <option value="bimestral">Bimestral</option>
                    <option value="semestral">Semestral</option>
                    <option value="anual">Anual</option>
                </select>
            </div>
            <div class="form-group">
                <select class="custom-select" id="forma_pagamento" name="forma_pagamento">
                    <option selected>Forma de Pagamento</option>
                    <option value="debito">Débito</option>
                    <option value="credito">Crédito</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="valor_doacao" name="valor_doacao" placeholder="Valor da Doação">
            </div>
            <label for="exampleFormControlInput1">Endereço:</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control cep_code_search" id="cep_code" name="cep" placeholder="Cep">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço Completo">
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input type="text" class="form-control" name="numero" placeholder="Numero">
                </div>
                <div class="col mt-3">
                    <input type="text" class="form-control" name="complemento" placeholder="Complemento">
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input type="text" class="form-control" name="estado" placeholder="Estado">
                </div>
            </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success my-3" id="cadastro">Cadastrar</button>
    </div>
    </form>
</div>
</div>
</body>
</html>