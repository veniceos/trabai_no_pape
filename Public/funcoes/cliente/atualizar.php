<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

    $clienteController = new ClienteController($pdo);

    // Verificar se o ID está no URL e buscar o cliente
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $cliente = $clienteController->showClienteId($id);

        if ($cliente) { // Verificar se o cliente foi encontrado
?>
        <fieldset>
            <h2>Atualizar Cliente</h2>
            <form method="post">
                <input value="<?php echo htmlspecialchars($cliente['nome']); ?>" type="text" name="atualizar_nome" placeholder="Nome" required>
                <input value="<?php echo htmlspecialchars($cliente['email']); ?>" type="text" name="atualizar_email" placeholder="Email" required>
                <input value="<?php echo htmlspecialchars($cliente['telefone']); ?>" type="text" name="atualizar_telefone" placeholder="Telefone" required>
                <input value="<?php echo htmlspecialchars($cliente['CPF']); ?>" type="text" name="atualizar_CPF" placeholder="CPF" required>
                <input value="<?php echo htmlspecialchars($cliente['endereco']); ?>" type="text" name="atualizar_endereco" placeholder="Endereço" required>
                <input value="<?php echo htmlspecialchars($cliente['historico']); ?>" type="text" name="atualizar_historico" placeholder="Histórico" required>
                <button type="submit">Atualizar Cliente</button>
            </form>
        </fieldset>
<?php
        } else {
            echo "<p>Cliente não encontrado.</p>";
        }
    } else {
        echo "<p>ID do cliente não especificado.</p>";
    }
?>
