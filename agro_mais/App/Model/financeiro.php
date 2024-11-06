<?php
class FinanceiroModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar financeiro
    public function criarFinanceiro($receita, $dispesas, $lucros) {
        $sql = "INSERT INTO financeiro (receita, dispesas, lucros) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$receita, $dispesas, $lucros]);

        header('Location: lista.php');
        exit();
    }

    // Model para listar financeiro
    public function listarFinanceiros() {
        $sql = "SELECT * FROM financeiro";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar financeiro
        public function atualizarFinanceiro($id, $receita, $dispesas, $lucros){
            $sql = "UPDATE financeiro SET receita = ?, dispesas = ?, lucros = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$receita, $dispesas, $lucros, $id]);

            header('Location: lista.php');
        exit();
        }
        
        // Model para deletar Financeiro
        public function excluirFinanceiro($id) {
            $sql = "DELETE FROM financeiro WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }

        public function showFinanceiroId($id) {
            $sql = "SELECT * FROM financeiro WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}
?>