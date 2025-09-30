<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperance Criar Conta</title>
    <link rel="shortcut icon" href="localhost/SobriedadeTesteXampp/view/images/sobriedade.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <form action="formulario-criar-conta.php" method="POST">
            <h1 id="titulo">Temperance :D</h1>
            <h1 id="subtitulo">Registre-se</h1>
            <section>
                
            <input type="email"
                        name="email"
                        placeholder="Email: exemplo@gmail.com/.io...">
                <div class="erros-preenchimento"><span id="erro-email">
                </span></div>

                <input type="password"
                        name="senha"
                        placeholder="Senha: minimo 8 caracteres...">

                <div class="erros-preenchimento"><span id="erro-senha">
                </span></div>

                <input type="password"
                        name="confirmar-senha"
                        placeholder="Confirmar senha...">
                <div class="erros-preenchimento"><span id="erro-confirmar-senha">
                </span></div>
            </section>
            <button type="submit">Criar Conta</button>
        </form>
    </main>
</body>

</html>