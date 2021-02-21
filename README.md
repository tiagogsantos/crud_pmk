# CRUD-MVC-PHP
Crud em MVC e PHP - 
### Objetivo: 

>Desenvolver um sistema CRUD simples em PHP 7 (sem frameworks) e MySQL para a administração de doação.

### Detalhes:

>As doaçoes devem contar com as seguintes informações:

1. Nome
2. E-mail
3. CPF
4. Telefone
5. Data de Nascimento
6. Data do Cadastro
7. Intervalo de doação
8. Valor da Doação
9. Forma de Pagamento
10. Endereço

### Detalhes sobre o programa:

1.  init.php são os arquivos de configurações do sistema de doação
2.  diretório "view" é onde fica todas as telas do sistema
3.  diretório "controller" é onde fica fica as funcionalidades do sistema que interragem com o banco de dados
4.  diretório "model" é onde fica os arquivos de conexão com o banco de dados

No diretório "view" existem 3 páginas principais: editar.php, cadastro.php e index.php, em seguida tem o menu.php e a head com as chamadas de arquivos como CSS/JS.

No diretório "controller" contém arquivos php que exercem a funcionalidade

No diretório "model" contém os arquivos de conexão ao banco de dados

Não esquecer de inserir CREATE TABLE doacao

O arquivo script.sql é o dump solicitado no teste.
