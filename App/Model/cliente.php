<?php
class ClienteModel {  // Corrigido para 'ClienteModel'
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarCliente($nome, $email, $telefone, $CPF, $endereco, $historico) {
        $sql = "INSERT INTO cliente (nome, email, telefone, CPF, endereco, historico) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $telefone, $CPF, $endereco, $historico]);
    }

    public function listarClientes() {
        $sql = "SELECT * FROM cliente";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarCliente($id, $nome, $email, $telefone, $CPF, $endereco, $historico) {
        $sql = "UPDATE cliente SET nome = ?, email = ?, telefone = ?, CPF = ?, endereco = ?, historico = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $telefone, $CPF, $endereco, $historico, $id]);
    }

    public function excluirCliente($id) {
        $sql = "DELETE FROM cliente WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function showClienteId($id) {
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
