<?php

    $usuario = $_SESSION['dados-usuario'] ?? null;

    if (!$usuario) {
        header('Location: /kaizen/controller/login.controller.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal | Kaizen</title>
    <link rel="stylesheet" href="../view/style-principal.css">
</head>
<body>
    
    <main class="perfil-container">
        <header class="perfil-header">
            <img 
                src="<?php echo ($_SESSION['dados-usuario']['foto']) ?>" 
                alt="Foto de Perfil"
                class="perfil-foto"
            >
            
            <div class="perfil-info-geral">
                <h1 id="titulo">Kaizen</h1>
                <h2 id="subtitulo">Bem-vindo, <?php echo ($_SESSION['dados-usuario']['nome']) ?>!</h2>
                <p class="email-usuario"><strong>Email:</strong> <?php echo ($_SESSION['dados-usuario']['email']) ?></p>
            </div>
        </header>

        <div class="conteudo-principal-grid">
            
            <section class="dados-conquistas">
                <h3>Dados e Conquistas</h3>
                <p>Total de Hábitos: X</p>
                <p>Streak Atual: Y dias</p>
            </section>

            <section class="grafico">
                <div class="motivacao">
                    <h4>Motivação Hábito:</h4>
                    <p class="motivacao-texto"><?php echo ($_SESSION['dados-usuario']['motivacao-habito']) ?></p>
                </div>
                <div class="simulacao-grafico">
                    Gráfico mostrando apenas crescimento
                    <br>
                    Muda a cada hábito escolhido
                </div>
            </section>

            <aside class="lista-habitos">
                <h3>Lista de Hábitos</h3>
                <ul>
                    <?php
                        if (isset($usuario['habitos']) && is_array($usuario['habitos'])) {
                            foreach ($usuario['habitos'] as $habito_item) {
                                $nome_habito = $habito_item['habitos']['nome-habito'] ?? 'Hábito sem nome';
                                echo '<li>' . htmlspecialchars($nome_habito) . '</li>';
                            }
                        } else {
                            echo '<li>Nenhum hábito adicionado.</li>';
                        }
                    ?>
                </ul>
            </aside>
        </div>

        <footer class="botoes-acao">
            <a class="btn-acao" href="../controller/adicionar-habito.controller.php">Adicionar Hábito</a>
            <button class="btn-acao editar-perfil">Editar Perfil</button>
            <a href="../controller/logout.controller.php" class="btn-acao">Deslogar</a>
        </footer>
        
    </main>
</body>
</html>