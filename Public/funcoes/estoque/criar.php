<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\estoque.php';

    $estoqueController = new EstoqueController($pdo);

    if (isset($_POST['nome'], $_POST['categoria'], $_POST['unidade'], $_POST['quantidade'], $_POST['entrada'], $_POST['saida'], $_POST['quantidade_minima'], $_POST['fornecedor'])) {
        $estoqueController->criarEstoque($_POST['nome'], $_POST['categoria'], $_POST['unidade'], $_POST['quantidade'], $_POST['entrada'], $_POST['saida'], $_POST['quantidade_minima'], $_POST['fornecedor']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
?>

<header>
    <a href="lista.php">Voltar</a>
    <h1>Estoque</h1>
</header>

<form method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="categoria" placeholder="Categoria" required>
    <input type="text" name="unidade" placeholder="Unidade" required>
    <input type="text" name="quantidade" placeholder="Quantidade" required>
    <input type="text" name="entrada" placeholder="Entrada" required>
    <input type="text" name="saida" placeholder="Saída" required>
    <input type="text" name="quantidade_minima" placeholder="Quantidade Mínima" required>
    <input type="text" name="fornecedor" placeholder="Fornecedor" required>
    <button type="submit">Adicionar Estoque</button>
</form>
