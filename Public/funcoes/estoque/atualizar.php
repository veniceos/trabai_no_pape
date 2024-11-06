<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\estoque.php';

$estoqueController = new EstoqueController($pdo);

// Verificar se o ID está no URL e buscar o estoque
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $estoque = $estoqueController->showEstoqueId($id);

    if ($estoque) {
?>
        <fieldset>
            <h2>Atualizar Estoque</h2>
            <form method="post">
                <input value="<?php echo htmlspecialchars($estoque['nome']); ?>" type="text" name="atualizar_nome" placeholder="Nome" required>
                <input value="<?php echo htmlspecialchars($estoque['categoria']); ?>" type="text" name="atualizar_categoria" placeholder="Categoria" required>
                <input value="<?php echo htmlspecialchars($estoque['unidade']); ?>" type="text" name="atualizar_unidade" placeholder="Unidade" required>
                <input value="<?php echo htmlspecialchars($estoque['quantidade']); ?>" type="text" name="atualizar_quantidade" placeholder="Quantidade" required>
                <input value="<?php echo htmlspecialchars($estoque['entrada']); ?>" type="text" name="atualizar_entrada" placeholder="Entrada" required>
                <input value="<?php echo htmlspecialchars($estoque['saida']); ?>" type="text" name="atualizar_saida" placeholder="Saída" required>
                <input value="<?php echo htmlspecialchars($estoque['quantidade_minima']); ?>" type="text" name="atualizar_quantidade_minima" placeholder="Quantidade Mínima" required>
                <input value="<?php echo htmlspecialchars($estoque['fornecedor']); ?>" type="text" name="atualizar_fornecedor" placeholder="Fornecedor" required>
                <button type="submit">Atualizar Estoque</button>
            </form>
        </fieldset>
<?php
    } else {
        echo "<p>Estoque não encontrado.</p>";
    }
} else {
    echo "<p>ID do estoque não especificado.</p>";
}
?>
