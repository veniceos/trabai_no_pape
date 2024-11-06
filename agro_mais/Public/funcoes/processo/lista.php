<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\processo.php';

$processoController = new ProcessoController($pdo);
$processos = $processoController->listarProcessos();

$processoController->exibirListaProcessos();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/processo/criar.php">Criar processo</a>