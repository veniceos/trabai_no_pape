<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

    $clienteController = new ClienteController($pdo);
    $clientes = $clienteController->listarClientes();

    if (isset($_GET['id'], $_POST['atualizar_nome'], $_POST['atualizar_email'], $_POST['atualizar_telefone'], $_POST['atualizar_CPF'], $_POST['atualizar_endereco'], $_POST['atualizar_historico'])) {
        $clienteController->atualizarCliente($_GET['id'], $_POST['atualizar_nome'], $_POST['atualizar_email'], $_POST['atualizar_telefone'], $_POST['atualizar_CPF'], $_POST['atualizar_endereco'], $_POST['atualizar_historico']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    $id = $_GET['id'];
     $Clientes = $clienteController->showClienteId($id);
?>

?>

<fieldset>
        <h2>Atualizar Cliente</h2>
        <form method="post">
            <input required value="<?php echo $cliente['nome']; ?> type="text" name="atualizar_nome" placeholder="Nome" required>
            <input required value="<?php echo $cliente['email']; ?> type="text" name="atualizar_email" placeholder="Email" required>
            <input required value="<?php echo $cliente['telefone']; ?> type="text" name="atualizar_telefone" placeholder="Telefone" required>
            <input required value="<?php echo $cliente['CPF']; ?> type="text" name="atualizar_CPF" placeholder="CPF" required>
            <input required value="<?php echo $cliente['endereco']; ?> type="text" name="atualizar_endereco" placeholder="Endereço" required>
            <input required value="<?php echo $cliente['historico']; ?> type="text" name="atualizar_historico" placeholder="Histórico" required>
            <button type="submit">Atualizar Cliente</button>
        </form>
    </fieldset>