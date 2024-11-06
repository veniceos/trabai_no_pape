<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\fornecedor.php';

$fornecedorController = new fornecedorController($pdo);
$fornecedores = $fornecedorController->listarFornecedores();

$fornecedorController->exibirListaFornecedores();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/fornecedor/criar.php">Criar fornecedor</a>