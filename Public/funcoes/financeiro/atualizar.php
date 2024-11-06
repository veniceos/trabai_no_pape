<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\financeiro.php';

$financeiroController = new FinanceiroController($pdo);

// Verificar se o ID está no URL e buscar o financeiro
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $financeiro = $financeiroController->showFinanceiroId($id);

    if ($financeiro) {
?>
        <fieldset>
            <h2>Atualizar Financeiro</h2>
            <form method="post">
                <input value="<?php echo htmlspecialchars($financeiro['vendas']); ?>" type="text" name="atualizar_vendas" placeholder="Vendas" required>
                <input value="<?php echo htmlspecialchars($financeiro['dispesas']); ?>" type="text" name="atualizar_despesas" placeholder="Despesas" required>
                <input value="<?php echo htmlspecialchars($financeiro['lucros']); ?>" type="text" name="atualizar_lucros" placeholder="Lucros" required>
                <button type="submit">Atualizar Financeiro</button>
            </form>
        </fieldset>
<?php
    } else {
        echo "<p>Financeiro não encontrado.</p>";
    }
} else {
    echo "<p>ID do financeiro não especificado.</p>";
}
?>
