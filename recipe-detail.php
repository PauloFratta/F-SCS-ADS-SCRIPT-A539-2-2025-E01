<?php
// =======================================================================
// PHP: Simulação de Dados de Receitas - VERSÃO CORRIGIDA
// =======================================================================

// Array de todas as receitas
$all_recipes = [
    // Receita de ID 456 (Bolo de Chocolate)
    '456' => [
        'titulo' => 'Bolo de Chocolate Fofinho e Molhadinho',
        'imagem' => 'imagens/bolochocolate.jpg',
        'resumo' => 'Este bolo é um clássico! Com uma massa incrivelmente fofa e uma cobertura cremosa de brigadeiro, é impossível resistir.',
        'tempo_preparo' => '15 min',
        'tempo_cozimento' => '40 min',
        'dificuldade' => 'Fácil',
        'porcoes' => '12 fatias',
        'colaborador' => 'Aline Silva',
        'ingredientes_massa' => [
            '3 ovos grandes', '1 xícara (chá) de açúcar', '1/2 xícara (chá) de óleo', '1 xícara (chá) de leite quente', '2 xícaras (chá) de farinha de trigo', '1 xícara (chá) de chocolate em pó 50%', '1 colher (sopa) de fermento em pó'
        ],
        'ingredientes_cobertura' => [
            '1 lata de leite condensado', '1 caixa de creme de leite', '3 colheres (sopa) de chocolate em pó', '1 colher (sopa) de manteiga', 'Granulado a gosto'
        ],
        'modo_preparo' => [
            'Massa: Em uma tigela grande, bata os ovos com o açúcar até formar um creme claro. Adicione o óleo e o leite quente, misture bem.',
            'Em outra tigela, peneire a farinha e o chocolate. Adicione os secos à mistura líquida e mexa delicadamente até incorporar.',
            'Por último, adicione o fermento e misture sem bater. Despeje em uma forma untada e enfarinhada (25cm de diâmetro).',
            'Asse em forno pré-aquecido a 180°C por cerca de 40 minutos. Faça o teste do palito.',
            'Cobertura: Misture todos os ingredientes da cobertura em uma panela e leve ao fogo médio, mexendo sempre até engrossar (ponto de brigadeiro mole).',
            'Desenforme o bolo já frio e despeje a cobertura por cima. Decore com granulado. Sirva!'
        ]
    ],
    // Receita de ID 789 (Coxinha de Frango)
    '789' => [
        'titulo' => 'Coxinha Crocante e Recheada',
        'imagem' => 'imagens/coxinha.jpg',
        'resumo' => 'A coxinha perfeita para a sua festa! Massa macia e recheio cremoso de frango desfiado.',
        'tempo_preparo' => '60 min',
        'tempo_cozimento' => '10 min (fritura)',
        'dificuldade' => 'Médio',
        'porcoes' => '25 unidades',
        'colaborador' => 'Marina Costa',
        'ingredientes_massa' => ['Farinha de trigo', 'Caldo de galinha', 'Manteiga'],
        'ingredientes_cobertura' => ['Frango cozido e desfiado', 'Catupiry (opcional)', 'Tempero verde'],
        'modo_preparo' => ['Ferver a água com o caldo e a manteiga. Adicionar a farinha de uma vez. Cozinhar até soltar do fundo da panela.', 'Abrir a massa, rechear e modelar.', 'Passar no ovo e na farinha de rosca. Fritar por imersão até dourar.']
    ],
    // Receita de ID 150 (Vitamina de Morango) - CUIDADO: Havia uma duplicata, mantive a segunda
    '150' => [
        'titulo' => 'Vitamina de Morango',
        'imagem' => 'imagens/vitmorango.jpg',
        'resumo' => 'Uma cremosa vitamina docinha de morango!',
        'tempo_preparo' => '5 min',
        'tempo_cozimento' => '—',
        'dificuldade' => 'Fácil',
        'porcoes' => '1 copo',
        'colaborador' => 'Aline Silva',
        'ingredientes_massa' => ['Morangos frescos', 'Leite gelado', 'Açúcar ou mel', 'Gelo'],
        'ingredientes_cobertura' => ['Chantilly (opcional)', 'Pedaços de morango para decorar'],
        'modo_preparo' => [
            'Lavar e picar os morangos.',
            'Adicionar ao liquidificador com leite, açúcar/mel e gelo.',
            'Bater até ficar cremoso e servir gelado.'
        ]
    ], // <-- Vírgula adicionada aqui
    // Receita de ID 140 (Espaguete de Abobrinha)
    '140' => [
        'titulo' => 'Espaguete de Abobrinha',
        'imagem' => 'imagens/macarraoabobrinha.jpg',
        'resumo' => 'Uma deliciosa receita vegana!',
        'tempo_preparo' => '15 min',
        'tempo_cozimento' => '5 min',
        'dificuldade' => 'Fácil',
        'porcoes' => '2 porções',
        'colaborador' => 'Aline Silva',
        'ingredientes_massa' => ['Abobrinhas grandes', 'Azeite', 'Alho picado'],
        'ingredientes_cobertura' => ['Tomates cereja', 'Manjericão', 'Sal e pimenta'],
        'modo_preparo' => [
            'Cortar a abobrinha em formato de espaguete usando um spiralizer.',
            'Refogar alho no azeite e adicionar a abobrinha.',
            'Cozinhar por poucos minutos, adicionar tomates e temperar com sal, pimenta e manjericão.'
        ]
    ], // <-- Vírgula adicionada aqui
    // Receita de ID 130 (Pão de Queijo Mineiro)
    '130' => [
        'titulo' => 'Pão de Queijo Mineiro',
        'imagem' => 'imagens/paodequeijo.jpg',
        'resumo' => 'O verdadeiro pão de queijo, crocante por fora e macio por dentro.',
        'tempo_preparo' => '20 min',
        'tempo_cozimento' => '25 min',
        'dificuldade' => 'Fácil',
        'porcoes' => '20 unidades',
        'colaborador' => 'Aline Silva',
        'ingredientes_massa' => ['Polvilho azedo', 'Queijo meia cura ralado', 'Ovos', 'Leite', 'Óleo'],
        'ingredientes_cobertura' => ['Queijo ralado extra (opcional)'],
        'modo_preparo' => [
            'Aquecer leite e óleo e escaldar o polvilho.',
            'Adicionar queijo e ovos e misturar até formar uma massa homogênea.',
            'Modelar bolinhas, colocar em forma e assar até dourar.'
        ]
    ] // <-- Última chave
]; // <-- Array fechado corretamente

// 1. Pega o ID da receita da URL (usando o método GET)
$recipe_id = $_GET['id'] ?? null;

// 2. Verifica se o ID é válido e se a receita existe
if ($recipe_id && isset($all_recipes[$recipe_id])) {
    $receita = $all_recipes[$recipe_id];
} else {
    // Se o ID for inválido ou a receita não existir, redireciona ou exibe um erro
    // Alterado para index.html, pois index.php não foi fornecido.
    header("Location: index.html"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/globals.css">
    <title><?php echo $receita['titulo']; ?> - Receitas Know</title>
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
    
    <div id="sitetodo" class="centralizar-receita">
        <article class="recipe-detail">
            <h1><?php echo $receita['titulo']; ?></h1>
            <img src="<?php echo $receita['imagem']; ?>" alt="Imagem da receita de <?php echo $receita['titulo']; ?>" class="recipe-image-detail">
            
            <p class="recipe-summary">
                **Resumo:** <?php echo $receita['resumo']; ?>
            </p>
            <div class="recipe-info-box">
                <p>**Colaborador:** <?php echo $receita['colaborador']; ?></p>
                <ul>
                    <li>**Tempo de Preparo:** <?php echo $receita['tempo_preparo']; ?></li>
                    <li>**Tempo de Cozimento/Fritura:** <?php echo $receita['tempo_cozimento']; ?></li>
                    <li>**Dificuldade:** <?php echo $receita['dificuldade']; ?></li>
                    <li>**Porções:** <?php echo $receita['porcoes']; ?></li>
                </ul>
            </div>
            
            <hr>

            <section class="ingredients-section">
                <h2>📝 Ingredientes</h2>
                
                <?php if (isset($receita['ingredientes_massa']) && !empty($receita['ingredientes_massa'])): ?>
                    <h3>Para a Massa</h3>
                    <ul class="ingredient-list">
                        <?php foreach ($receita['ingredientes_massa'] as $ingrediente): ?>
                            <li><?php echo $ingrediente; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if (isset($receita['ingredientes_cobertura']) && !empty($receita['ingredientes_cobertura'])): ?>
                    <h3>Para a Cobertura/Recheio</h3>
                    <ul class="ingredient-list">
                        <?php foreach ($receita['ingredientes_cobertura'] as $ingrediente): ?>
                            <li><?php echo $ingrediente; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </section>
            
            <hr>

            <section class="instructions-section">
                <h2>🔪 Modo de Preparo</h2>
                <ol class="preparation-steps">
                    <?php foreach ($receita['modo_preparo'] as $passo): ?>
                        <li><?php echo $passo; ?></li>
                    <?php endforeach; ?>
                </ol>
            </section>
        </article>
    </div>

    <footer>
        <p>&copy; 2025 Receitas Know | Endereço: Rua 123</p>
        <p class="footer-links"><a href="privacy.html">Política de Privacidade</a></p>
    </footer>
</body>

</html>