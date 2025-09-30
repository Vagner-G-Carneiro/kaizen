<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar de Credenciais</title>
    <link rel="stylesheet" href="style-geral.css">
</head>
<body>
    <main>
        <form action="" method="">
            <h1 id="titulo">Temperance :D</h1>
            <h1 id="subtitulo">Atualizar Credenciais</h1>
            <section>
            <input type="email"
                        name="email"
                        placeholder="Email: ">
                <div class="erros-preenchimento"><span id="erro-email">
                </span></div>

                <input type="password"
                        name="nova-senha"
                        placeholder="Nova Senha: minimo 8 caracteres...">

                <div class="erros-preenchimento"><span id="erro-senha">
                </span></div>

                <input type="password"
                        name="confirmar-nova-senha"
                        placeholder="Confirmar nova senha...">
                <div class="erros-preenchimento"><span id="erro-confirmar-senha">
                </span></div>

                <input type="password"
                    name="senha-atual"
                    placeholder="Senha atual:">
            </section>
            <button type="submit">Atualizar Senha</button>
        </form>
    </main>
</body>
</html>