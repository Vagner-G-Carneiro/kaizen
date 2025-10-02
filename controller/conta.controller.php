<?php

    require '../utils/validacoes.php';
    require '../model/conta.model.php';
    session_start();

    $email = sanitize('email');
    $senha = sanitize('senha');
    $confirmar_senha = sanitize('confirmar-senha');
    $location = '/kaizen/view/conta.view.php';
    $erros = [];

    if(!email_valido($email))
    {
        $erros['email'] = 'Verifique se o email está no formato correto!';
    }

    if(!senha_valida($senha))
    {
        $erros['senha'] = 'A senha deve conter ao menos uma letra minuscula<br>Uma maiuscula<br>Ter 8 ou mais caracteres.';
    }

    if(!senhas_coincidem($senha, $confirmar_senha))
    {
        $erros['confirmar-senha'] = 'A senhas não coincidem';
    }

    verificar_erros($erros, $email,$location);

    $dados_usuario =[
        'email' => $email,
        'senha' => $senha,
    ];
    
    $cadastro_completo = cadastrar_usuario_conta_model($dados_usuario);

    if($cadastro_completo)
    {
        header('Location: /kaizen/view/perfil.view.php');
        exit;
    } else {
        $erros['erro-critico'] = 'Erro ao registrar usuario<br>Caso Persista contate<br>Os desenvolvedores.';
        verificar_erros($erros, $email,$location);
    }

?>