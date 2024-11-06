<!DOCTYPE html>
<html>
<head>
    <title>Lista de clientes</title>
</head>
<body>
    <fieldset>
        <h1>Lista de clientes</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Histórico</th>
                    <th>ações</th>
                    </tr>
                </thead>
                <?php if (isset($clientes) && is_array($clientes) && !empty($clientes)): ?>
                    <?php foreach ($clientes as $cliente): ?><tr>
                            <td><?php echo $cliente['id']; ?></td>
                            <td><?php echo $cliente['nome']; ?></td>
                            <td><?php echo $cliente['email']; ?></td>
                            <td><?php echo $cliente['telefone']; ?></td>
                            <td><?php echo $cliente['CPF']; ?></td>
                            <td><?php echo $cliente['endereco']; ?></td>
                            <td><?php echo $cliente['historico']; ?></td>
                            <td><a href="atualizar.php?id=<?php echo $cliente['id']; ?>">Atualizar</a>
                            ou
                            <a href="excluir.php?id=<?php echo $cliente['id']; ?>">Excluir</a></td>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Nenhum cliente encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>

    <a href="../Public/index.php">Voltar</a>
</body>
</html>
