<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\estoque.php';

$estoqueController = new EstoqueController($pdo);
$estoques = $estoqueController->listarEstoques();

$estoqueController->exibirListaEstoques();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/estoque/criar.php">Criar estoque</a>