<?php
// =======================================================================
// PHP: Simulação de Dados de Receitas para Listagem
// Este é o arquivo recipes.php
// =======================================================================

// Array de todas as receitas
$all_recipes = [
    // Receita de ID 456 (Bolo de Chocolate)
    '456' => [
        'titulo' => 'Bolo de Chocolate Fofinho e Molhadinho',
        'categoria' => 'sobremesas', 
        'imagem' => 'imagens/bolochocolate.jpg',
        'resumo' => 'Este bolo é um clássico! Com uma massa incrivelmente fofa e uma cobertura cremosa de brigadeiro, é impossível resistir.',
        'dificuldade' => 'Fácil',
        'colaborador' => 'Aline Silva',
    ],
    // Receita de ID 789 (Coxinha de Frango)
    '789' => [
        'titulo' => 'Coxinha Crocante e Recheada',
        'categoria' => 'pratosprincipais', 
        'imagem' => 'imagens/coxinha.jpg',
        'resumo' => 'A coxinha perfeita para a sua festa! Massa macia e recheio cremoso de frango desfiado.',
        'dificuldade' => 'Médio',
        'colaborador' => 'Marina Costa',
    ],
    // Receita de ID 123 (Pão de Queijo)
    '123' => [
        'titulo' => 'Pão de Queijo Mineiro',
        'categoria' => 'pratosprincipais', 
        'imagem' => 'imagens/paodequeijo.jpg',
        'resumo' => 'O verdadeiro pão de queijo, crocante por fora e macio por dentro.',
        'dificuldade' => 'Fácil',
        'colaborador' => 'Aline Silva',
    ],
    '150' => [
        'titulo' => 'Vitamina de Morango',
        'categoria' => 'bebidas', 
        'imagem' => 'imagens/vitmorango.jpg',
        'resumo' => 'Uma cremosa vitamina docinha de morango!',
        'dificuldade' => 'Fácil',
        'colaborador' => 'Aline Silva',
    ],
    '140' => [
        'titulo' => 'Espaguete de Abobrinha',
        'categoria' => 'pratosprincipais', 
        'imagem' => 'imagens/macarraoabobrinha.jpg',
        'resumo' => 'Uma deliciosa receita vegana!',
        'dificuldade' => 'Fácil',
        'colaborador' => 'Aline Silva',
    ],
    '130' => [
        'titulo' => 'Estrogonoffe de Frango',
        'categoria' => 'pratosprincipais', 
        'imagem' => 'imagens/strogonoff.jpg',
        'resumo' => 'Estrogonofe: uma receita leve e fácil para surpreender na cozinha.',
        'dificuldade' => 'Fácil',
        'colaborador' => 'Aline Silva',
    ]
];

// 1. Pega a categoria da URL (usando o método GET)
$current_category = $_GET['category'] ?? 'todas'; // Pega a categoria ou define como 'todas'

// 2. Filtra as receitas pela categoria
$filtered_recipes = [];
$page_title = 'Todas as Receitas';

if ($current_category === 'todas') {
    $filtered_recipes = $all_recipes;
    $page_title = 'Todas as Receitas';
} else {
    foreach ($all_recipes as $id => $recipe) {
        if (isset($recipe['categoria']) && $recipe['categoria'] === $current_category) {
            $filtered_recipes[$id] = $recipe;
        }
    }
    // Formata o título da página (ex: 'pratosprincipais' -> 'Pratos Principais')
    $page_title = ucfirst(str_replace('principais', ' Principais', $current_category));
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/globals.css">
    <title><?php echo $page_title; ?> | Receitas Know</title>
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
            <li><a href="collaborate.php">Colabore</a></li>
            <li><a href="about.html">Quem Somos</a></li>
        </ul>
    </nav>
    
    <div id="sitetodo">
        
        <h1 class="category-title">🍽️ <?php echo $page_title; ?></h1>

        <div class="tabelareceitas">
            <?php if (empty($filtered_recipes)): ?>
                <p>Nenhuma receita encontrada para a categoria **<?php echo $page_title; ?>**.</p>
            <?php else: ?>
                <?php foreach ($filtered_recipes as $id => $recipe): ?>
                    <div class="card">
                        <img src="<?php echo $recipe['imagem']; ?>" alt="Imagem de <?php echo $recipe['titulo']; ?>">
                        <h3><?php echo $recipe['titulo']; ?></h3>
                        <p><?php echo $recipe['resumo']; ?></p>
                        <ul>
                            <li>**Dificuldade:** <?php echo $recipe['dificuldade']; ?></li>
                            <li>**Colaborador:** <?php echo $recipe['colaborador']; ?></li>
                        </ul>
                        <a href="recipe-detail.php?id=<?php echo $id; ?>" class="btn">Ver Receita</a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Receitas Know | Endereço: Rua 123</p>
        <p class="footer-links"><a href="privacy.html">Política de Privacidade</a></p>
    </footer>
</body>

</html>