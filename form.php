<?php
session_start(); // iniciar uma sessão

if (!isset($_SESSION['numero'])) { // verificar se a variável não existe
    $_SESSION['numero'] = 0; // criar a variável e atribuir o valor 0
}

if (isset($_POST['botao'])) { // verificar se o botão foi pressionado
    $_SESSION['numero']++; // incrementar o valor da variável
}

?>