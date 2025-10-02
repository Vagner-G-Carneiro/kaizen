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

    function adicionar_habito($dados_novo_habito)
    {
        $id_usuario = $_SESSION['id'] ?? '0';

        $usuarios = carregar_usuarios();

        foreach ($usuarios as $chave => $usuario) {
            if ($usuario['id'] == $id_usuario) {
                
                if (!isset($usuario['habitos']) || !is_array($usuario['habitos'])) {
                    $usuario['habitos'] = [];
                }

                $id_habito = 1;
                if (!empty($usuario['habitos'])) {
                    $ids_existentes = array_column($usuario['habitos'], 'id_habito');
                    $id_habito = max($ids_existentes) + 1;
                }

                $novo_habito_completo = array_merge(
                    ['id_habito' => $id_habito],
                    $dados_novo_habito
                );

                $usuario['habitos'][] = $novo_habito_completo;
                $usuarios[$chave] = $usuario;
                salvar_usuarios($usuarios);
                
                return $usuario; 
            }
        }

        return null; 
    }

?>