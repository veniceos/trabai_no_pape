<?php
class EstoqueModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar estoque
    public function criarEstoque($nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor) {
        $sql = "INSERT INTO estoque (nome, categoria, unidade, quantidade, entrada, saida, quantidade_minima, fornecedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor]);
    }

    // Model para listar estoque
    public function listarEstoques() {
        $sql = "SELECT * FROM estoque";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar estoque
        public function atualizarEstoque($nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor){
            $sql = "UPDATE estoque SET nome = ?, categoria = ?, unidade = ?, quantidade = ?, entrada = ?, saida = ?, quantidade_minima = ?, fornecedor = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $categoria, $unidade, $quantidade, $entrada, $saida, $quantidade_minima, $fornecedor]);
        }
        
        // Model para deletar Estoque
        public function excluirEstoque($id) {
            $sql = "DELETE FROM estoque WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }
}
?>