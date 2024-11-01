<?php 
require_once '../Model/clientes.php';

class ClinteController {
    private $clienteModel;

    public function __construct($pdo) {

        $this->clienteModel = new ClinteModel($pdo);
    }

    public function criarCliente($nome, $email, $telefone, $CPF, $endereco, $historico) {
        $this->clienteModel->criarCliente($nome, $email, $telefone, $CPF, $endereco, $historico);
    }

    public function listarClientes() {
        return $this->clienteModel->listarClientes();
    }

    public function exibirListaClientes() {
        $clientes = $this->clienteModel->listarClientes();
        include '';
    }

    public function atualizarCliente($id, $nome, $email, $telefone, $CPF, $endereco, $historico) {
        $this->clienteModel->atualizarCliente($id, $nome, $email, $telefone, $CPF, $endereco, $historico);
    }
    
    public function excluirCliente ($id) {
        $this->clienteModel->excluirCliente($id);
    }
}
?>