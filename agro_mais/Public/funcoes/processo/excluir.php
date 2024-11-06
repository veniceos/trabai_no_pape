<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\processo.php';

    $processoController = new ProcessoController($pdo);
    $processos = $processoController->listarProcessos();

    

    // Verificar se o ID para exclusão foi passado via GET
    if (isset($_GET['excluir_id'])) {
        
        $id = $_GET['excluir_id'];
        $processoController->excluirProcesso($id);
        header('Location: lista.php'); // Redireciona para a lista após a exclusão
        exit;
    }
?>

<h2>Excluir Processo</h2>
<form method="GET">
    <input type="hidden" name="excluir_id" value="<?php echo $_GET['id'] ?? ''; ?>">
    <button type="submit">Excluir Processo</button>
    <button type="button"><a href='lista.php'>Voltar</a> </button>
</form>
