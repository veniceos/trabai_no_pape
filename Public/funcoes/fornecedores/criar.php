<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\fornecedor.php';

    $fornecedorController = new FornecedorController($pdo);

    if (isset($_POST['nome'], $_POST['cnpj'], $_POST['endereco'], $_POST['telefone'], $_POST['email'], $_POST['produtos'])) {
        $fornecedorController->criarFornecedor($_POST['nome'], $_POST['cnpj'], $_POST['endereco'], $_POST['telefone'], $_POST['email'], $_POST['produtos']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
?>

<header>
    <a href="lista.php">Voltar</a>
    <h1>Fornecedor</h1>
</header>

<form method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="cnpj" placeholder="CNPJ" required>
    <input type="text" name="endereco" placeholder="Endereço" required>
    <input type="text" name="telefone" placeholder="Telefone" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="produtos" placeholder="Produtos" required>
    <button type="submit">Adicionar Fornecedor</button>
</form>
