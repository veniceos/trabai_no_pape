<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\processo.php';

$processoController = new ProcessoController($pdo);

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
                <input value="<?php echo htmlspecialchars($processo['estatus']); ?>" type="text" name="atualizar_status" placeholder="Status" required>
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
