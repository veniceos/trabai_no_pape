<?php 
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Model\fornecedor.php';

class FornecedorController {
    private $fornecedorModel;

    public function __construct($pdo) {

        $this->fornecedorModel = new FornecedorModel($pdo);
    }

    public function criarFornecedor($nome, $cnpj, $endereco, $telefone, $email, $produtos) {
        $this->fornecedorModel->criarFornecedor($nome, $cnpj, $endereco, $telefone, $email, $produtos);
    }

    public function listarFornecedores() {
        return $this->fornecedorModel->listarFornecedores();
    }

    public function exibirListaFornecedores() {
        $fornecedores = $this->fornecedorModel->listarFornecedores();
        include 'C:\xampp\htdocs\Trabai_no_pape\App\View\fornecedor.php';
    }

    public function atualizarfornecedor($id, $nome, $cnpj, $endereco, $telefone, $email, $produtos) {
        $this->fornecedorModel->atualizarFornecedor($id, $nome, $cnpj, $endereco, $telefone, $email, $produtos);
    }
    
    public function excluirFornecedor ($id) {
        $this->fornecedorModel->excluirFornecedor($id);
    }

    public function showFornecedorId($id) {
        return $this->fornecedorModel->showFornecedorId($id);
    }
}
?>