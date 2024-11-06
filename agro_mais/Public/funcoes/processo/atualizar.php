<?php
    require_once 'C:/xampp/htdocs/Trabai_no_pape/config/config.php';
    require_once 'C:/xampp/htdocs/Trabai_no_pape/App/Controller/processo.php';

    $processoController = new ProcessoController($pdo);
    $processos = $processoController->listarProcessos();

    if (isset($_GET['id'], 
    $_POST['atualizar_descricao'], 
    $_POST['atualizar_dados'], 
    $_POST['atualizar_estatus'], 
    $_POST['atualizar_responsavel'], 
    $_POST['atualizar_rastreamento'], 
    $_POST['atualizar_observacoes'])) {
        $processoController->atualizarProcesso(
            $_GET['id'], 
            $_POST['atualizar_descricao'], 
            $_POST['atualizar_dados'], 
            $_POST['atualizar_estatus'], 
            $_POST['atualizar_responsavel'], 
            $_POST['atualizar_rastreamento'], 
            $_POST['atualizar_observacoes']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

           // Verificar se o ID está no URL e buscar o processo
           if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $processo = $processoController->showProcessoId($id);
    
            if ($processo) { 
    ?>

<fieldset>
            <h2>Atualizar Processo</h2>
            <form method="post">
                <input value="<?php echo htmlspecialchars($processo['descricao']); ?>" type="text" name="atualizar_descricao" placeholder="Descrição" required>
                <input value="<?php echo htmlspecialchars($processo['dados']); ?>" type="text" name="atualizar_dados" placeholder="Dados" required>
                <input value="<?php echo htmlspecialchars($processo['estatus']); ?>" type="text" name="atualizar_estatus" placeholder="Status" required>
                <input value="<?php echo htmlspecialchars($processo['responsavel']); ?>" type="text" name="atualizar_responsavel" placeholder="Responsável" required>
                <input value="<?php echo htmlspecialchars($processo['rastreamento']); ?>" type="text" name="atualizar_rastreamento" placeholder="Rastreamento" required>
                <input value="<?php echo htmlspecialchars($processo['observacoes']); ?>" type="text" name="atualizar_observacoes" placeholder="Observações" required>
                <button type="submit">Atualizar Processo</button>
            </form>
        </fieldset>

<?php
        } else {
            echo "<p>Processo não encontrado.</p>";
        }
    } else {
        echo "<p>ID do processo não especificado.</p>";
    }
?>

        