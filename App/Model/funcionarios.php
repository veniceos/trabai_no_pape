<?php
class FuncionarioModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar funcionario
    public function criarFuncionario($nome, $cpf, $cargo, $horario, $jornada) {
        
        $sql = "INSERT INTO funcionario (nome, cpf, cargo, horario, jornada) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $cpf, $cargo, $horario, $jornada]);

        header('Location: lista.php');
        exit();
    }

    // Model para listar funcionario
    public function listarFuncionarios() {
        $sql = "SELECT * FROM funcionario";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar funcionario
        public function atualizarFuncionario($id, $nome, $cpf, $cargo, $horario, $jornada) {
            $sql = "UPDATE funcionario SET nome = ?, cpf = ?, cargo = ?, horario = ?, jornada = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $cpf, $cargo, $horario, $jornada, $id]);
    
            header('Location: lista.php');
            exit();
        }
        
        // Model para deletar funcionario
        public function excluirFuncionario($id) {
            $sql = "DELETE FROM funcionario WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);

            header('Location: lista.php');
            exit();
        }

        public function showFuncionarioId($id) {
            $sql = "SELECT * FROM funcionario WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}
?>