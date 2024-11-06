<?php
class ProcessosModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar processo
    public function criarProcesso($descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes) {
        $sql = "INSERT INTO processo (descricao, dados, estatus, responsavel, rastreamento, observacoes) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes]);
    }

    // Model para listar processo
    public function listarProcessos() {
        $sql = "SELECT * FROM processo";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar processo
        public function atualizarProcesso($descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes){
            $sql = "UPDATE processo SET descricao = ?, dados = ?, estatus = ?, responsavel = ?, rastreamento = ?, observacoes WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$descricao, $dados, $estatus, $responsavel, $rastreamento, $observacoes]);
        }
        
        // Model para deletar processo
        public function excluirProcesso($id) {
            $sql = "DELETE FROM processo WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }

        public function showProcessoId($id) {
            $sql = "SELECT * FROM processo WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}
?>