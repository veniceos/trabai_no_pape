<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

    $clienteController = new ClienteController($pdo);
    $clientes = $clienteController->listarClientes();

    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['CPF'], $_POST['endereco'], $_POST['historico'])) {
        $clienteController->criarCliente($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['CPF'], $_POST['endereco'], $_POST['historico']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

?>

<header>
        <a href="lista.php">Voltar</a>
        <h1>Cliente</h1>
    </header>
    
    <form method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <input type="text" name="CPF" placeholder="CPF" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <input type="text" name="historico" placeholder="Histórico" required>
        <button type="submit">Adicionar Cliente</button>
    </form>