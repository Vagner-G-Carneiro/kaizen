<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - KAIZEN</title>
    <link rel="stylesheet" href="style-geral.css">
</head>

<body>
    <main>

        <form action="../controller/conta.controller.php" method="POST">
            <h1 id="titulo">KAIZEN >:D</h1>
            <h1 id="subtitulo">Registre-se</h1>
            <section>
                
            <input type="text"
                        name="email"
                        placeholder="Email: exemplo@gmail.com/.io...">
                <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['email'] ?? '');
                    ?>
                </span></div>


            <input type="password"
                        name="senha"
                        placeholder="Senha: minimo 8 caracteres...">
                <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['senha'] ?? '');
                    ?>
                </span></div>

                <input type="password"
                        name="confirmar-senha"
                        placeholder="Confirmar senha...">
                <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['confirmar-senha'] ?? '');
                    ?>
                </span></div>

                <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['erro-critico'] ?? '');
                    ?>
                </span></div>
            </section>
            <button type="submit">Criar Conta</button>
        </form>
    </main>

    <?php
    
        if(isset($_SESSION['erros']))
        {
            unset($_SESSION['erros']);
        }

    ?>

</body>
</html>