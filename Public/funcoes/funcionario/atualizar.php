<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\funcionarios.php';

    $funcionarioController = new FuncionarioController($pdo);
    $funcionarios = $funcionarioController->listarFuncionarios();

    if (isset($_GET['id'], 
    $_POST['atualizar_nome'], 
    $_POST['atualizar_cpf'], 
    $_POST['atualizar_cargo'], 
    $_POST['atualizar_horario'], 
    $_POST['atualizar_jornada'])) {
        $funcionarioController->atualizarFuncionario(
            $_GET['id'], 
            $_POST['atualizar_nome'], 
            $_POST['atualizar_cpf'], 
            $_POST['atualizar_cargo'], 
            $_POST['atualizar_horario'], 
            $_POST['atualizar_jornada']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

           // Verificar se o ID está no URL e buscar o funcionario
           if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $funcionario = $funcionarioController->showFuncionarioId($id);
    
            if ($funcionario) { 
    ?>

<fieldset>
        <h2>Atualizar Funcionario</h2>
        <form method="post">
            <input required value="<?php echo $funcionario['nome']; ?>" type="text" name="atualizar_nome" placeholder="Nome" required>
            <input required value="<?php echo $funcionario['cpf']; ?>" type="text" name="atualizar_cpf" placeholder="Email" required>
            <input required value="<?php echo $funcionario['cargo']; ?>" type="text" name="atualizar_cargo" placeholder="Telefone" required>
            <input required value="<?php echo $funcionario['horario']; ?>" type="text" name="atualizar_horario" placeholder="CPF" required>
            <input required value="<?php echo $funcionario['jornada']; ?>" type="text" name="atualizar_jornada" placeholder="Histórico" required>
            <button type="submit">Atualizar Funcionario</button>
        </form>
    </fieldset>
        

<?php
        } else {
            echo "<p>Funcionario não encontrado.</p>";
        }
    } else {
        echo "<p>ID do funcionario não especificado.</p>";
    }
?>
