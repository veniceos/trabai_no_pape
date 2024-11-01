<?php 
require_once '../Model/financeiro.php';

class FinanceiroModel {
    private $financeiroModel;

    public function __construct($pdo) {

        $this->financeiroModel = new ClinteModel($pdo);
    }

    public function criarFinanceiro($vendas, $dispesas, $lucros) {
        $this->financeiroModel->criarFinanceiro($vendas, $dispesas, $lucros);
    }

    public function listarFinanceiros() {
        return $this->financeiroModel->listarFinanceiros();
    }

    public function exibirListaFinanceiros() {
        $financeiros = $this->financeiroModel->listarFinanceiros();
        include '';
    }

    public function atualizarFinanceiro($id, $vendas, $dispesas, $lucros) {
        $this->financeiroModel->atualizarFinanceiro($id, $vendas, $dispesas, $lucros);
    }
    
    public function excluirFinanceiro ($id) {
        $this->financeiroModel->excluirFinanceiro($id);
    }
}
?>