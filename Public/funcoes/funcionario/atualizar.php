<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\funcionario.php';

$funcionarioController = new FuncionarioController($pdo);

// Verificar se o ID está no URL e buscar o funcionário
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $funcionario = $funcionarioController->showFuncionarioId($id);

    if ($funcionario) {
?>
        <fieldset>
            <h2>Atualizar Funcionário</h2>
            <form method="post">
                <input value="<?php echo htmlspecialchars($funcionario['nome']); ?>" type="text" name="atualizar_nome" placeholder="Nome" required>
                <input value="<?php echo htmlspecialchars($funcionario['cpf']); ?>" type="text" name="atualizar_cpf" placeholder="CPF" required>
                <input value="<?php echo htmlspecialchars($funcionario['cargo']); ?>" type="text" name="atualizar_cargo" placeholder="Cargo" required>
                <input value="<?php echo htmlspecialchars($funcionario['horario']); ?>" type="text" name="atualizar_horario" placeholder="Horário" required>
                <input value="<?php echo htmlspecialchars($funcionario['jornada']); ?>" type="text" name="atualizar_jornada" placeholder="Jornada" required>
                <button type="submit">Atualizar Funcionário</button>
            </form>
        </fieldset>
<?php
    } else {
        echo "<p>Funcionário não encontrado.</p>";
    }
} else {
    echo "<p>ID do funcionário não especificado.</p>";
}
?>
