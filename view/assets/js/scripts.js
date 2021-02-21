$(function () {
    // Mascaras do formulario
    $(document).ready(function(){
        $("#cpf").mask('000.000.000-00');
        $('#telefone').mask('(00) 00000-0000');
        $("#data_nascimento").mask('00/00/0000');
        $("#data_cadastro").mask('00/00/0000');
        $("#valor_doacao").mask('R$ 000.000.000.000.000,00', {reverse: true, placeholder: "R$ 0,00"});
        $("#cep").mask('00000-000', {reverse: true});
    });


    $(function () {
        // Validação de Formulario
        $("form[name='cadastro']").validate({
            ignore: ".ignore",
            rules: {
                // Campos que serão obrigatorios
                nome: "required",
                telefone: "required",
                cpf: "required",
                data_nascimento: "required",
                data_cadastro: "required",
                cep: "required",
                endereco: "required",
                numero: "required",
                estado: "required",
                email: {
                    required: true,
                    // Validando que só aceito e-mail valido
                    email: true
                },
            },

            // Mensagens que vai aparecer se o usuário não preencher os campos requeridos
            messages: {
                nome: "Por favor, digite seu nome",
                telefone: "Por favor, digite um numero de telefone",
                cpf: "Por favor, digite o seu CPF",
                email: "Por favor, digite um e-mail valido",
                data_nascimento: "Por favor, digite sua data de nascimento",
                data_cadastro: "Por favor, digite sua data de cadastro",
                cep: "Por favor, digite o seu CEP",
                endereco: "Por favor, preencha o seu endereço",
                estado: "Por favor, preencha o seu estado",
                numero: "Por favor, preencha o numero",
                agree: "Favor assinalar a sua concordância com a nossa política de privacidade",
                hiddenRecaptcha: "Por favor preencha o captcha"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });

});
