<?php
    require'../utils/validacoes.php';
    require'../model/perfil.model.php';

    $nome = sanitize('nome');
    $motivo_mudar = sanitize('motivo-mudar');
    $foto = sanitize('foto');
    $location = '/kaizen/view/perfil.view.php';
    $erros = [];

    if(!$nome)
    {
        $erros['nome'] = 'Nome ou apelido é obrigatório :D';
    }

    if(!$motivo_mudar)
    {
        $erros['motivo-mudar'] = 'Motivo para os habitos é obrigatório :/<br>Sempre bom lembrar do<br>porque quer mudar.';
    }

    verificar_erros2($erros, $location);
    
    $dados_perfil =[
        'nome' => $nome,
        'motivo-mudar' => $motivo_mudar,
        'foto' => $foto
    ];

    $perfil_update = inserir_info_perfil($dados_perfil);

    if($perfil_update)
    {
        header('Location: /kaizen/view/adicionar-habito.view.php');
        exit;
    } else {
        $erros['erro-critico'] = 'Erro ao registrar perfil de usuario<br>Caso Persista contate<br>Os desenvolvedores.';
        verificar_erros2($erros, $location);
    }

?>