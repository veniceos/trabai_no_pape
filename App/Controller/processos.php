<?php 
require_once '../Model/processos.php';

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
        include '';
    }

    public function atualizarProcesso($id,$descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes) {
        $this->processoModel->atualizarProcesso($id, $descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes);
    }
    
    public function excluirProcesso ($id) {
        $this->processoModel->excluirProcesso($id);
    }
}
?>