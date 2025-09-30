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
        <h2 id="subtitulo">Personalização de perfil</h2>
    </header>

    <main>
        <form action="">
                <div class="div-foto">
                    <label for="image-upload" class="placeholder-image">Escolha uma foto</label>
                    <input type="file" id="image-upload" accept="image/*">
                </div>
                <div class="div-informacoes">
                    <input type="text" placeholder="Qual nome ou apelido?">
                    <input type="text" placeholder="Em poucas palavras, por que quer mudar seus habitos?">
                </div>
        </form>
    </main>

</body>
</html>