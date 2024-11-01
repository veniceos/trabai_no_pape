<?php
class FinanceiroModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar financeiro
    public function criarFinanceiro($vendas, $dispesas, $lucros) {
        $sql = "INSERT INTO financeiro (vendas, dispesas, lucros) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$vendas, $dispesas, $lucros]);
    }

    // Model para listar financeiro
    public function listarFinanceiros() {
        $sql = "SELECT * FROM financeiro";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar financeiro
        public function atualizarFinanceiro($vendas, $dispesas, $lucros){
            $sql = "UPDATE financeiro SET vendas = ?, dispesas = ?, lucros = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$vendas, $dispesas, $lucros]);
        }
        
        // Model para deletar Financeiro
        public function excluirFinanceiro($id) {
            $sql = "DELETE FROM financeiro WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }
}
?>