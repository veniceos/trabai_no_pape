<?php
class ClinteModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar cliente
    public function criarCliente($nome, $email, $telefone, $CPF, $endereco, $historico) {
        $sql = "INSERT INTO cliente (nome, email, telefone, CPF, endereco, historico) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $telefone, $CPF, $endereco, $historico]);
    }

    // Model para listar cliente
    public function listarClientes() {
        $sql = "SELECT * FROM cliente";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar cliente
        public function atualizarCliente($nome, $email, $telefone, $CPF, $endereco, $historico){
            $sql = "UPDATE cliente SET nome = ?, email = ?, telefone = ?, CPF = ?, endereco = ?, historico WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $email, $telefone, $CPF, $endereco, $historico]);
        }
        
        // Model para deletar Cliente
        public function excluirCliente($id) {
            $sql = "DELETE FROM cliente WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }
}
?>