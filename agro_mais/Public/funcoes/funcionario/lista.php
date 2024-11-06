<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\funcionarios.php';

$funcionarioController = new funcionarioController($pdo);
$funcionarios = $funcionarioController->listarFuncionarios();

$funcionarioController->exibirListaFuncionarios();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/funcionario/criar.php">Criar funcionario</a>