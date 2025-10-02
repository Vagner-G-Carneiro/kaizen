<?php
    session_start();
    require_once'../permissao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-criar-perfil.css">
    <title>Seu Perfil.</title>
</head>
<body>
    <header>
        <h1 id="titulo">KAIZEN >:D</h1>
        <h2 id="subtitulo">Personalização de perfil</h2>
    </header>

    <main>
        <form action="../controller/perfil.controller.php" method="POST">
                <div class="div-foto">
                    <label for="image-upload" class="placeholder-image">Escolha uma foto</label>
                    <input type="file" name="foto" id="image-upload" accept="image/*">
                </div>
                <div class="div-informacoes">
                    <input type="text" placeholder="Qual nome ou apelido?" name="nome">
                    <div class="erros-preenchimento"><span>
                    <?php 
                        echo ($_SESSION['erros']['nome'] ?? '');
                    ?>
                    </span></div>
                    <input type="text" placeholder="Em poucas palavras, por que quer mudar seus habitos?" name="motivo-mudar">
                     <div class="erros-preenchimento"><span>
                        <?php 
                            echo ($_SESSION['erros']['motivo-mudar'] ?? '');
                        ?>
                    </span></div>
                    <div class="erros-preenchimento"><span>
                        <?php 
                            echo ($_SESSION['erros']['erro-critico'] ?? '');
                        ?>
                    </span></div>
                </div>
                <button type="submit">Enviar</button>
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