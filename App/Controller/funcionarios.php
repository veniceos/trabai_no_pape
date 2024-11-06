<?php 
require_once '../Model/funcionarios.php';

class FuncionarioController {
    private $funcionarioModel;

    public function __construct($pdo) {

        $this->funcionarioModel = new FuncionarioModel($pdo);
    }

    public function criarFuncionario($nome, $cpf, $cargo, $horario, $jornada) {
        $this->funcionarioModel->criarFuncionario($nome, $cpf, $cargo, $horario, $jornada);
    }

    public function listarFuncionarios() {
        return $this->funcionarioModel->listarFuncionarios();
    }

    public function exibirListaFuncionarios() {
        $funcionarios = $this->funcionarioModel->listarFuncionarios();
        include '';
    }

    public function atualizarFuncionario($id,$nome, $cpf, $cargo, $horario, $jornada) {
        $this->funcionarioModel->atualizarFuncionario($id, $nome, $cpf, $cargo, $horario, $jornada);
    }
    
    public function excluirFuncionario ($id) {
        $this->funcionarioModel->excluirFuncionario($id);
    }

    public function showFuncionarioId($id) {
        return $this->funcionarioModel->showFuncionarioId($id);
    }
}
?>