<?php

    define('USUARIOS_JSON', __DIR__.'/banco_simulacao/usuarios_dados.json');

    function carregar_usuarios()
    {
        if(!file_exists(USUARIOS_JSON))
        {
            return [];
        }

        $json = file_get_contents(USUARIOS_JSON);
        // Retorna como array associativo (true)
        return json_decode($json, true); 
    }

    function salvar_usuarios($usuarios)
    {
        // Usa JSON_PRETTY_PRINT para formatar o JSON de forma legível
        $json = json_encode($usuarios, JSON_PRETTY_PRINT);
        return file_put_contents(USUARIOS_JSON, $json);
    }

    function verificar_credenciais(array $credenciais): bool
    {
        $usuarios = carregar_usuarios();
        $email_login = $credenciais['email'];
        $senha_login = $credenciais['senha'];
        
        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $email_login) {
                
                // 1. Verifica se a senha fornecida corresponde ao hash armazenado
                if (password_verify($senha_login, $usuario['senhaHash'])) {
                    
                    // --- Ponto Crítico de Segurança ---
                    
                    // 2. Regenera o ID da sessão para prevenir Session Fixation
                    session_regenerate_id(true);

                    // 3. Armazena o ID (chave principal) e o email na sessão
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['email'] = $usuario['email']; // Opcional, mas útil
                    
                    // Autenticação bem-sucedida
                    return true; 
                }
                
                // Senha incorreta, sai do loop e retorna false
                return false;
            }
        }
        
        // Usuário não encontrado
        return false;
    }

?>