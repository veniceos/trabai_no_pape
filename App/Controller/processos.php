<?php 
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Model\processos.php';

class ProcessosController {
    private $processoModel;

    public function __construct($pdo) {

        $this->processoModel = new ProcessosModel($pdo);
    }

    public function criarProcesso($descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes) {
        $this->processoModel->criarProcesso($descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes);
    }

    public function listarProcessos() {
        return $this->processoModel->listarProcessos();
    }

    public function exibirListaProcessos() {
        $processos = $this->processoModel->listarProcessos();
        include 'C:\xampp\htdocs\Trabai_no_pape\App\View\processos.php';
    }

    public function atualizarProcesso($id,$descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes) {
        $this->processoModel->atualizarProcesso($id, $descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes);
    }
    
    public function excluirProcesso ($id) {
        $this->processoModel->excluirProcesso($id);
    }

    public function showProcessoId($id) {
        return $this->processoModel->showProcessoId($id);
    }
}
?>