<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\financeiro.php';

    $financeiroController = new FinanceiroController($pdo);
    $financeiros = $financeiroController->listarFinanceiros();

    

    // Verificar se o ID para exclusão foi passado via GET
    if (isset($_GET['excluir_id'])) {
        
        $id = $_GET['excluir_id'];
        $financeiroController->excluirFinanceiro($id);
        header('Location: lista.php'); // Redireciona para a lista após a exclusão
        exit;
    }
?>

<h2>Excluir Financeiro</h2>
<form method="GET">
    <input type="hidden" name="excluir_id" value="<?php echo $_GET['id'] ?? ''; ?>">
    <button type="submit">Excluir Financeiro</button>
    <button type="button"><a href='lista.php'>Voltar</a> </button>
</form>
