<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\processos.php';

    $processoController = new ProcessoController($pdo);

    if (isset($_POST['descricao'], $_POST['dados'], $_POST['estatus'], $_POST['responsavel'], $_POST['rastreamento'], $_POST['observacoes'])) {
        $processoController->criarProcesso($_POST['descricao'], $_POST['dados'], $_POST['estatus'], $_POST['responsavel'], $_POST['rastreamento'], $_POST['observacoes']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
?>

<header>
    <a href="lista.php">Voltar</a>
    <h1>Processo</h1>
</header>

<form method="post">
    <input type="text" name="descricao" placeholder="Descrição" required>
    <input type="text" name="dados" placeholder="Dados" required>
    <input type="text" name="estatus" placeholder="Status" required>
    <input type="text" name="responsavel" placeholder="Responsável" required>
    <input type="text" name="rastreamento" placeholder="Rastreamento" required>
    <input type="text" name="observacoes" placeholder="Observações" required>
    <button type="submit">Adicionar Processo</button>
</form>
