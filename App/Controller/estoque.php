<?php 
require_once '../Model/estoque.php';

class EstoqueModel {
    private $estoqueModel;

    public function __construct($pdo) {

        $this->estoqueModel = new ClinteModel($pdo);
    }

    public function criarEstoque($nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor) {
        $this->estoqueModel->criarEstoque($nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor);
    }

    public function listarEstoques() {
        return $this->estoqueModel->listarEstoques();
    }

    public function exibirListaEstoques() {
        $estoques = $this->estoqueModel->listarEstoques();
        include '';
    }

    public function atualizarEstoque($id, $nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor) {
        $this->estoqueModel->atualizarEstoque($id, $nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor);
    }
    
    public function excluirEstoque ($id) {
        $this->estoqueModel->excluirEstoque($id);
    }
}
?>