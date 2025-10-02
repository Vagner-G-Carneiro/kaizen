<?php
    session_start();
    require'../utils/validacoes.php';
    require'../model/login.model.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email = sanitize('email');
        $senha = sanitize('senha');
        $location = '/kaizen/view/login.view.php';
        $erros = [];

        if(!email_valido($email))
        {
            $erros['email'] = 'Verifique se o email está no formato correto!';
        }

        if(!senha_valida($senha))
        {
            $erros['senha'] = 'A senha deve conter ao menos uma letra minuscula<br>Uma maiuscula<br>Ter 8 ou mais caracteres.<br>E possuir numero';
        }

        verificar_erros($erros, $email,$location);

        $credenciais = [
            'email' => $email,
            'senha' => $senha
        ];

        $permitir_login = verificar_credenciais($credenciais);

        if($permitir_login == 0)
        {
            header('Location: /kaizen/controller/principal.controller.php');
            exit;
        } elseif ($permitir_login == 1)
        {
            $erros['login-geral'] = 'Email ou senha incorretos';
            verificar_erros($erros, $email,$location);
        } elseif($permitir_login == 2)
        {
            $erros['login-geral'] = 'Err: Email não ligado a uma conta.';
        }
        verificar_erros($erros, $email,$location);
    } else {
        require '../view/login.view.php';
    }
?>