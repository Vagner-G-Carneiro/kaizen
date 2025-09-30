<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperance Login</title>
    <link rel="shortcut icon" href="/view/images/sobriedade.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-login-conta.css">
</head>

<body>
    <main>
        <form action="login.php" method="POST">
            <h1 id="titulo">Temperance :D</h1>
            <h1 id="subtitulo">Bem vindo de volta!</h1>
            <section>
                <input type="email" id="email" placeholder="Email...">
                <input type="password" id="senha" placeholder="Senha...">
            </section>

            <button type="submit">Efetuar Login</button>
        </form>
    </main>
    <a href="/Kaizen-WebSvdor/kaizen/view/conta.view.php">Novo Aqui? Crie sua conta!</a>
</body>

</html>