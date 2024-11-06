<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\fornecedor.php';

    $fornecedorController = new FornecedorController($pdo);
    $fornecedors = $fornecedorController->listarFornecedores();

    

    // Verificar se o ID para exclusão foi passado via GET
    if (isset($_GET['excluir_id'])) {
        
        $id = $_GET['excluir_id'];
        $fornecedorController->excluirFornecedor($id);
        header('Location: lista.php'); // Redireciona para a lista após a exclusão
        exit;
    }
?>

<h2>Excluir Fornecedor</h2>
<form method="GET">
    <input type="hidden" name="excluir_id" value="<?php echo $_GET['id'] ?? ''; ?>">
    <button type="submit">Excluir Fornecedor</button>
    <button type="button"><a href='lista.php'>Voltar</a> </button>
</form>
