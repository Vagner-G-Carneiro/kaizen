<?php
    session_start();
    require_once '../utils/permissao.php';
    require_once '../model/principal.model.php';

    $id_logado = $_SESSION['id'] ?? null;
    
    $dados_usuario = [
        'nome' => '',
        'email' => '',
        'foto_url' => '',
        'motivacao' => ''
    ];

    if ($id_logado) {
        $dados_encontrados = buscar_dados_usuario_por_id($id_logado);

        if ($dados_encontrados) {
            $dados_usuario = array_merge($dados_usuario, $dados_encontrados);
        }
    }

    $_SESSION['dados-usuario'] = $dados_usuario;

    require '../view/principal.view.php';

?>