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

    function salvar_usuarios($usuarios)
    {
        $json = json_encode($usuarios, JSON_PRETTY_PRINT);
        return file_put_contents(USUARIOS_JSON, $json);
    }

    function verificar_credenciais(array $credenciais): int
    {
        $usuarios = carregar_usuarios();
        $email_login = $credenciais['email'];
        $senha_login = $credenciais['senha'];
        
        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $email_login) {
                if (password_verify($senha_login, $usuario['senhaHash'])) {
                    session_regenerate_id(true);

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['email'] = $usuario['email'];
                    
                    return 0; 
                }
                return 1;
            }
        }
        return 2;
    }

?>