<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

    $clienteController = new ClienteController($pdo);
    $clientes = $clienteController->listarClientes();

    if (isset($_POST['excluir_id'])) {
        $clienteController->excluirCliente($_POST['excluir_id']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

?>

<h2>Excluir Cliente</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Cliente</button>
    </form>