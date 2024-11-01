<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

    $clienteController = new ClienteController($pdo);
    $clientes = $clienteController->listarClientes();

    // Verificar se o ID para exclusão foi passado via GET
    if (isset($_GET['excluir_id'])) {
        $id = $_GET['excluir_id'];
        $clienteController->excluirCliente($id);
        header('Location: lista.php'); // Redireciona para a lista após a exclusão
        exit;
    }
?>

<h2>Excluir Cliente</h2>
<form method="GET">
    <input type="hidden" name="excluir_id" value="<?php echo $_GET['excluir_id'] ?? ''; ?>">
    <button type="submit">Excluir Cliente</button>
    <button type="button"><a href='lista.php'>Voltar</a> </button>
</form>
