<?php 
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Model\financeiro.php';

class FinanceiroController {
    private $financeiroModel;

    public function __construct($pdo) {

        $this->financeiroModel = new FinanceiroModel($pdo);
    }

    public function criarFinanceiro($receita, $dispesas, $lucros) {
        $this->financeiroModel->criarFinanceiro($receita, $dispesas, $lucros);
    }

    public function listarFinanceiros() {
        return $this->financeiroModel->listarFinanceiros();
    }

    public function exibirListaFinanceiros() {
        $financeiros = $this->financeiroModel->listarFinanceiros();
        include 'C:\xampp\htdocs\Trabai_no_pape\App\View\financeiro.php';
    }

    public function atualizarFinanceiro($id, $receita, $dispesas, $lucros) {
        $this->financeiroModel->atualizarFinanceiro($id, $receita, $dispesas, $lucros);
    }
    
    public function excluirFinanceiro ($id) {
        $this->financeiroModel->excluirFinanceiro($id);
    }

    public function showFinanceiroId($id) {
        return $this->financeiroModel->showFinanceiroId($id);
    }
}
?>