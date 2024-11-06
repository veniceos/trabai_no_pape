<?php
    require_once 'C:/xampp/htdocs/Trabai_no_pape/config/config.php';
    require_once 'C:/xampp/htdocs/Trabai_no_pape/App/Controller/fornecedor.php';

    $fornecedorController = new FornecedorController($pdo);
    $fornecedors = $fornecedorController->listarFornecedores();

    if (isset($_GET['id'], 
    $_POST['atualizar_nome'], 
    $_POST['atualizar_cnpj'], 
    $_POST['atualizar_endereco'], 
    $_POST['atualizar_telefone'], 
    $_POST['atualizar_email'], 
    $_POST['atualizar_produtos'])) {
        $fornecedorController->atualizarFornecedor(
            $_GET['id'], 
            $_POST['atualizar_nome'], 
            $_POST['atualizar_cnpj'], 
            $_POST['atualizar_endereco'], 
            $_POST['atualizar_telefone'], 
            $_POST['atualizar_email'], 
            $_POST['atualizar_produtos']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

           // Verificar se o ID está no URL e buscar o fornecedor
           if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $fornecedor = $fornecedorController->showFornecedorId($id);
    
            if ($fornecedor) { 
    ?>

<fieldset>
        <h2>Atualizar Fornecedor</h2>
        <form method="post">
            <input required value="<?php echo $fornecedor['nome']; ?>" type="text" name="atualizar_nome" placeholder="Nome" required>
            <input required value="<?php echo $fornecedor['cnpj']; ?>" type="text" name="atualizar_cnpj" placeholder="CNPJ" required>
            <input required value="<?php echo $fornecedor['endereco']; ?>" type="text" name="atualizar_endereco" placeholder="Endereço" required>
            <input required value="<?php echo $fornecedor['telefone']; ?>" type="text" name="atualizar_telefone" placeholder="Telefone" required>
            <input required value="<?php echo $fornecedor['email']; ?>" type="text" name="atualizar_email" placeholder="Email" required>
            <input required value="<?php echo $fornecedor['produtos']; ?>" type="text" name="atualizar_produtos" placeholder="Produtos" required>
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