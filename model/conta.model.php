<?php

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

    function cadastrar_usuario_conta_model($dados_usuario)
    {
        $usuarios = carregar_usuarios();
        
        $id = 0;

        if(empty($usuarios))
        {
            $id = 1;
        } else {
            $id = max(array_column($usuarios, 'id')) + 1;
        }

        $novo_usuario = [
            'id' => $id,
            'email' => $dados_usuario['email'],
            'senhaHash' => password_hash($dados_usuario['senha'], PASSWORD_BCRYPT)
        ];

        $usuarios[] = $novo_usuario;
        salvar_usuarios($usuarios);
        $_SESSION['id'] = $id;
        return $novo_usuario;
    }

    function buscar_usuario_por_id($id) {
        $usuarios = carregar_usuarios();
    
        foreach ($usuarios as $usuario) {
            if ($usuario['id'] == $id) {
                return $usuario;
            }
        }
        return null;
    }

    function buscar_usuario_por_email($email) {
        $usuarios = carregar_usuarios();
        
        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $email) {
                return $usuario;
            }
        }
        return null;
    }

?>