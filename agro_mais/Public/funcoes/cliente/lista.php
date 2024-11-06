<?php
require_once 'C:\xampp\htdocs\Trabai_no_pape\config\config.php';
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Controller\cliente.php';

$clienteController = new ClienteController($pdo);
$clientes = $clienteController->listarClientes();

$clienteController->exibirListaClientes();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/cliente/criar.php">Criar Cliente</a>