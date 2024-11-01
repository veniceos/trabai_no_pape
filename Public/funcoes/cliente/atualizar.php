<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

    $clienteController = new ClienteController($pdo);
    $clientes = $clienteController->listarClientes();

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

?>

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