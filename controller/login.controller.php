<?php
    session_start();
    require'../validacoes.php';
    require'../model/login.model.php';

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
        $erros['senha'] = 'A senha deve conter ao menos uma letra minuscula<br>Uma maiuscula<br>Ter 8 ou mais caracteres.';
    }

    verificar_erros($erros, $email,$location);

    $credenciais = [
        'email' => $email,
        'senha' => $senha
    ];

    $permitir_login = verificar_credenciais($credenciais);

    if($permitir_login)
    {
        header('Location: /kaizen/view/principal.view.php');
        exit;
    } else {
        $erros['erro-critico'] = 'Erro ao registrar usuario<br>Caso Persista contate<br>Os desenvolvedores.';
        verificar_erros($erros, $email,$location);
    }
?>