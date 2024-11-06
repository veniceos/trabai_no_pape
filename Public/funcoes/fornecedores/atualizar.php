<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\fornecedor.php';

$fornecedorController = new FornecedorController($pdo);

// Verificar se o ID está no URL e buscar o fornecedor
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $fornecedor = $fornecedorController->showFornecedorId($id);

    if ($fornecedor) {
?>
        <fieldset>
            <h2>Atualizar Fornecedor</h2>
            <form method="post">
                <input value="<?php echo htmlspecialchars($fornecedor['nome']); ?>" type="text" name="atualizar_nome" placeholder="Nome" required>
                <input value="<?php echo htmlspecialchars($fornecedor['cnpj']); ?>" type="text" name="atualizar_cnpj" placeholder="CNPJ" required>
                <input value="<?php echo htmlspecialchars($fornecedor['endereco']); ?>" type="text" name="atualizar_endereco" placeholder="Endereço" required>
                <input value="<?php echo htmlspecialchars($fornecedor['telefone']); ?>" type="text" name="atualizar_telefone" placeholder="Telefone" required>
                <input value="<?php echo htmlspecialchars($fornecedor['email']); ?>" type="email" name="atualizar_email" placeholder="Email" required>
                <input value="<?php echo htmlspecialchars($fornecedor['produtos']); ?>" type="text" name="atualizar_produtos" placeholder="Produtos" required>
                <button type="submit">Atualizar Fornecedor</button>
            </form>
        </fieldset>
<?php
    } else {
        echo "<p>Fornecedor não encontrado.</p>";
    }
} else {
    echo "<p>ID do fornecedor não especificado.</p>";
}
?>
