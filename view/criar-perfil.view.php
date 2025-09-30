<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-criar-perfil.css">
    <title>Seu Perfil</title>
</head>
<body>
    <header>
        <h1 id="titulo">Temperance :D</h1>
        <h2 id="subtitulo">Personalize sua Conta!</h2>
    </header>

    <main>
        <form action="">
                <div class="div-foto">
                    <p>Escolha uma foto para seu perfil!</p>
                    <label for="image-upload" class="placeholder-image"></label>
                    <input type="file" id="image-upload" accept="image/*">
                </div>
        </form>
    </main>

</body>
</html>