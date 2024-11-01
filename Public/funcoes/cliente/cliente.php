<?php
require_once '../../config/config.php';
require_once '../../App/Controller/cliente.php';

$clienteController = new ClienteController($pdo);

if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['CPF'], $_POST['endereco'], $_POST['historico'])) {
    $clienteController->criarCliente($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['CPF'], $_POST['endereco'], $_POST['historico']);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['id'], $_POST['atualizar_nome'], $_POST['atualizar_email'], $_POST['atualizar_telefone'], $_POST['atualizar_CPF'], $_POST['atualizar_endereco'], $_POST['atualizar_historico'])) {
    $clienteController->atualizarCliente($_POST['id'], $_POST['atualizar_nome'], $_POST['atualizar_email'], $_POST['atualizar_telefone'], $_POST['atualizar_CPF'], $_POST['atualizar_endereco'], $_POST['atualizar_historico']);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['excluir_id'])) {
    $clienteController->excluirCliente($_POST['excluir_id']);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$clientes = $clienteController->listarClientes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Cliente</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
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

    <fieldset>
    <?php
        $clienteController->exibirListaClientes();
    ?>

    </fieldset>

    <fieldset>
        <h2>Atualizar Cliente</h2>
        <form method="post">
            <select name="id">
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome']; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="atualizar_nome" placeholder="Nome" required>
            <input type="text" name="atualizar_email" placeholder="Email" required>
            <input type="text" name="atualizar_telefone" placeholder="Telefone" required>
            <input type="text" name="atualizar_CPF" placeholder="CPF" required>
            <input type="text" name="atualizar_endereco" placeholder="Endereço" required>
            <input type="text" name="atualizar_historico" placeholder="Histórico" required>
            <button type="submit">Atualizar Cliente</button>
        </form>
    </fieldset>

    <h2>Excluir Cliente</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Cliente</button>
    </form>
</body>
</html>
