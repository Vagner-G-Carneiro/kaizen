<?php
    
    session_start();
    define('USUARIOS_JSON', __DIR__.'/banco_simulacao/usuarios_dados.json');

    function carregar_usuarios()
    {
        if(!file_exists(USUARIOS_JSON))
        {
            return [];
        }

        $json = file_get_contents(USUARIOS_JSON);
        return json_decode($json, true);

    }

    function salvar_usuarios($usuario)
    {
        $json = json_encode($usuario, JSON_PRETTY_PRINT);
        return file_put_contents(USUARIOS_JSON, $json);
    }

    function inserir_info_perfil($novos_dados)
    {
        $id = $_SESSION['id'] ?? '0';

        $usuarios = carregar_usuarios();
        $encontrado = false;
        $usuario_atualizado = null;

        foreach ($usuarios as $chave => $usuario) {
            if ($usuario['id'] == $id) {
                $usuarios[$chave] = array_merge($usuario, $novos_dados);
                
                $usuario_atualizado = $usuarios[$chave];
                $encontrado = true;
                break;
            }
        }

        if ($encontrado) {
            salvar_usuarios($usuarios);
            return $usuario_atualizado;
        }

        return null;
    }
?>