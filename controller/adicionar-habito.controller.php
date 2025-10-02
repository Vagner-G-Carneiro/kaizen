<?php

    require'../model/adicionar-habito.model.php';
    require'../utils/validacoes.php';

    $habito_nome = sanitize('habito-nome');
    $meta = sanitize('meta');
    $motivacao = sanitize('motivacao');
    $location = '/kaizen/view/adicionar-habito.view.php';
    $erros = [];
    
    if(!$habito_nome)
    {
        $erros['habito-nome'] = 'O nome do habito é obrigatório :)';
    }

    if(!$meta)
    {
        $erros['meta'] = 'A meta é obrigatória :)';
    }

    if(!$motivacao)
    {
        $erros['motivacao'] = 'A motivação vai te ajudar a<br>manter constancia!';
    }

    verificar_erros2($erros, $location);

    $dados_habito = [
        'habitos' => [
            'nome-habito' => $habito_nome,
            'meta' => $meta,
            'motivacao-habito' => $motivacao
        ]
    ];

    $adicionar_habito = adicionar_habito($dados_habito);

    if($adicionar_habito)
    {
        header('Location: /kaizen/controller/principal.controller.php');
        exit;
    } else {
        $erros['erro-critico'] = 'Erro ao adicionar habito de usuario<br>Caso Persista contate<br>Os desenvolvedores.';
        verificar_erros2($erros, $location);
    }

?>