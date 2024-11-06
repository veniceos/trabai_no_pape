<?php
    require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
    require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\funcionario.php';

    $funcionarioController = new FuncionarioController($pdo);

    if (isset($_POST['nome'], $_POST['cpf'], $_POST['cargo'], $_POST['horario'], $_POST['jornada'])) {
        $funcionarioController->criarFuncionario($_POST['nome'], $_POST['cpf'], $_POST['cargo'], $_POST['horario'], $_POST['jornada']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
?>

<header>
    <a href="lista.php">Voltar</a>
    <h1>Funcionário</h1>
</header>

<form method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="cpf" placeholder="CPF" required>
    <input type="text" name="cargo" placeholder="Cargo" required>
    <input type="text" name="horario" placeholder="Horário" required>
    <input type="text" name="jornada" placeholder="Jornada" required>
    <button type="submit">Adicionar Funcionário</button>
</form>
