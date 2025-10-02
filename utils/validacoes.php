<?php

    function email_valido(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function senha_valida(string $senhaSemHash): bool
    {
        $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\W]{8,}$/';
        return (bool) preg_match($regex, $senhaSemHash);
    }

    function senhas_coincidem(string $senha1, string $senha2): bool
    {
        return $senha1 == $senha2;
    }

    function sanitize(string $campo): string
    {
        $valor_sanitizado = filter_input(
            INPUT_POST,
            $campo,
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
        return $valor_sanitizado ?? '';
    }

    function verificar_erros(array $erros, string $email, string $location)
    {
        if (!empty($erros))
        {
            $_SESSION['erros'] = $erros;
            $_SESSION['email_preenchido'] = ['email' => $email];
            header("Location: $location");
            exit; 
        }
    }

    function verificar_erros2(array $erros, string $location)
    {
        if (!empty($erros))
        {
            $_SESSION['erros'] = $erros;
            header("Location: $location");
            exit; 
        }
    }
?>