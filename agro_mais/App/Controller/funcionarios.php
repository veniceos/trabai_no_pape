<?php 
require_once 'C:\xampp\htdocs\Trabai_no_pape\App\Model\funcionarios.php';

class FuncionarioController {
    private $funcionarioModel;

    public function __construct($pdo) {

        $this->funcionarioModel = new FuncionarioModel($pdo);
    }

    public function criarFuncionario($nome, $cpf, $cargo, $turno, $jornada) {
        $this->funcionarioModel->criarFuncionario($nome, $cpf, $cargo, $turno, $jornada);
    }

    public function listarFuncionarios() {
        return $this->funcionarioModel->listarFuncionarios();
    }

    public function exibirListaFuncionarios() {
        $funcionarios = $this->funcionarioModel->listarFuncionarios();
        include 'C:\xampp\htdocs\Trabai_no_pape\App\View\funcionarios.php';
    }

    public function atualizarFuncionario($id, $nome, $cpf, $cargo, $turno, $jornada) {
        $this->funcionarioModel->atualizarFuncionario($id, $nome, $cpf, $cargo, $turno, $jornada);
    }
    
    public function excluirFuncionario ($id) {
        $this->funcionarioModel->excluirFuncionario($id);
    }

    public function showFuncionarioId($id) {
        return $this->funcionarioModel->showFuncionarioId($id);
    }
}
?>