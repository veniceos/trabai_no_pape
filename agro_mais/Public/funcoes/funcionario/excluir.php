<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\funcionarios.php';

    $funcionarioController = new FuncionarioController($pdo);
    $funcionarios = $funcionarioController->listarFuncionarios();

    

    // Verificar se o ID para exclusão foi passado via GET
    if (isset($_GET['excluir_id'])) {
        
        $id = $_GET['excluir_id'];
        $funcionarioController->excluirFuncionario($id);
        header('Location: lista.php'); // Redireciona para a lista após a exclusão
        exit;
    }
?>

<h2>Excluir Funcionario</h2>
<form method="GET">
    <input type="hidden" name="excluir_id" value="<?php echo $_GET['id'] ?? ''; ?>">
    <button type="submit">Excluir Funcionario</button>
    <button type="button"><a href='lista.php'>Voltar</a> </button>
</form>
