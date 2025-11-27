<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/globals.css">
    <title>Colabore | Receitas Know</title>
    <link rel="icon" type="image/x-icon" href="imagens/favicon.ico">
</head>

<body>
    <header class="header">
        <img src="imagens/logo2.png" alt="Logo Receitas Know" class="logo">
    </header>

    <nav>
        <ul class="menu">
            <li><a href="index.html">Home</a></li>

            <li class="dropdown">
                <a href="#">Receitas</a>
                <ul class="submenu">
                    <li><a href="recipes.php?category=sobremesas">Sobremesas</a></li>
                    <li><a href="recipes.php?category=pratosprincipais">Pratos Principais</a></li>
                    <li><a href="recipes.php?category=bebidas">Bebidas</a></li>
                </ul>
            </li>

            <li><a href="collaborate.php" class="active">Colabore</a></li>
            <li><a href="about.html">Quem Somos</a></li>
        </ul>
    </nav>

    <main id="sitetodo">
        <section class="conteudo-padrao">

            <h2>💡 Compartilhe sua Receita com o Mundo!</h2>
            <p>Envie suas melhores receitas e contribua com nossa comunidade culinária!</p>

            <!-- FORMULÁRIO CENTRALIZADO -->
            <form class="form-colab" action="#" method="POST">

                <div class="form-group-inline">
                    <div class="input-field">
                        <label for="titulo">Título da Receita:</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Ex.: Bolo de Cenoura" required>
                    </div>

                    <div class="input-field">
                        <label for="categoria">Categoria:</label>
                        <select id="categoria" name="categoria" required>
                            <option value="">Selecione...</option>
                            <option value="sobremesas">Sobremesa</option>
                            <option value="pratosprincipais">Prato Principal</option>
                            <option value="bebidas">Bebidas</option>
                        </select>
                    </div>
                </div>

                <div class="input-field full-width">
                    <label for="ingredientes">Ingredientes:</label>
                    <textarea id="ingredientes" name="ingredientes" rows="5" placeholder="Liste os ingredientes..." required></textarea>
                </div>

                <div class="input-field full-width">
                    <label for="preparo">Modo de Preparo:</label>
                    <textarea id="preparo" name="preparo" rows="6" placeholder="Explique o passo a passo..." required></textarea>
                </div>

                <button type="submit" class="btn">Enviar Receita</button>

            </form>

        </section>
    </main>

    <footer>
        <p>&copy; 2025 Receitas Know | Endereço: Rua 123</p>
        <p class="footer-links"><a href="privacy.html">Política de Privacidade</a></p>
    </footer>
</body>
</html>
