<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\financeiro.php';

    $financeiroController = new FinanceiroController($pdo);

    if (isset($_POST['vendas'], $_POST['despesas'], $_POST['lucros'])) {
        $financeiroController->criarFinanceiro($_POST['vendas'], $_POST['despesas'], $_POST['lucros']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
?>

<header>
    <a href="lista.php">Voltar</a>
    <h1>Financeiro</h1>
</header>

<form method="post">
    <input type="text" name="vendas" placeholder="Vendas" required>
    <input type="text" name="despesas" placeholder="Despesas" required>
    <input type="text" name="lucros" placeholder="Lucros" required>
    <button type="submit">Adicionar Financeiro</button>
</form>
