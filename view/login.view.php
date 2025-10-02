<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAIZEN Login</title>
    <link rel="shortcut icon" href="/view/images/sobriedade.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-geral.css">
</head>

<body>
    <main>
        <form action="../controller/login.controller.php" method="POST">
            <h1 id="titulo">KAIZEN >:D</h1>
            <h1 id="subtitulo">Bem vindo de volta!</h1>
            <section>
                
                <input type="email" name="email" placeholder="Email...">
                <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['email'] ?? '');
                    ?>
                </span></div>
                <input type="password" name="senha" placeholder="Senha...">
                <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['senha'] ?? '');
                    ?>
                </span></div>

            </section>
            <button type="submit">Efetuar Login</button>
        </form>
    </main>
    <a href="/kaizen/view/conta.view.php">Novo Aqui? Crie sua conta!</a>
</body>

</html>