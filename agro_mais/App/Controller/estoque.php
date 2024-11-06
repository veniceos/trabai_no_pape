<?php 
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Model\estoque.php';

class EstoqueController {
    private $estoqueModel;

    public function __construct($pdo) {

        $this->estoqueModel = new EstoqueModel($pdo);
    }

    public function criarEstoque($nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor) {
        $this->estoqueModel->criarEstoque($nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor);
    }

    public function listarEstoques() {
        return $this->estoqueModel->listarEstoques();
    }

    public function exibirListaEstoques() {
        $estoques = $this->estoqueModel->listarEstoques();
        include 'C:\xampp\htdocs\Trabai_no_pape\App\View\estoque.php';
    }

    public function atualizarEstoque($id, $nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor) {
        $this->estoqueModel->atualizarEstoque($id, $nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor);
    }
    
    public function excluirEstoque ($id) {
        $this->estoqueModel->excluirEstoque($id);
    }

    public function showEstoqueId($id) {
        return $this->estoqueModel->showEstoqueId($id);
    }
}
?>