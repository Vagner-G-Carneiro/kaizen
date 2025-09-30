<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Habito</title>
    <link rel="stylesheet" href="style-geral.css">
</head>
<body>
        <main>
        <form action="" method="">
            <h1 id="titulo">Temperance :D</h1>
            <h1 id="subtitulo">Adicionar Habito</h1>
            <section>
            <input type="text"
                        name="habito-nome"
                        placeholder="Nome:">
                <div class="erros-preenchimento"><span id="erro-nome-habito">
                </span></div>

                <input type="text"
                        name="meta"
                        placeholder="Meta diária[Numero de paginas, tempo dedicado]:">

                <div class="erros-preenchimento"><span id="erro-meta-diaria">
                </span></div>

                <input type="text"
                        name="motivacao"
                        placeholder="Motivação para o habito: ">
                <div class="erros-preenchimento"><span id="erro-motivacao">
                </span></div>
            </section>
            <button type="submit">Adicionar</button>
        </form>
    </main>
</body>
</html>