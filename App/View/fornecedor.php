<!DOCTYPE html>
<html>
<head>
    <title>Lista de Fornecedores</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Fornecedores</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nome</th>
                        <th>cnpj</th>
                        <th>endereço</th>
                        <th>telefone</th>
                        <th>email</th>
                        <th>produtos</th>
                    </tr>
                </thead>
                </thead>
                <?php if (isset($fornecedores) && is_array($fornecedores) && !empty($fornecedores)): ?>
                    <?php foreach ($fornecedores as $fornecedor): ?>
                        <tr>
                            <td><?php echo $fornecedor['id']; ?></td>
                            <td><?php echo $fornecedor['nome']; ?></td>
                            <td><?php echo $fornecedor['cnpj']; ?></td>
                            <td><?php echo $fornecedor['endereco']; ?></td>
                            <td><?php echo $fornecedor['telefone']; ?></td>
                            <td><?php echo $fornecedor['email']; ?></td>
                            <td><?php echo $fornecedor['produtos']; ?></td>
                            <td><a href="atualizar.php?id=<?php echo $fornecedor['id']; ?>">Atualizar</a>
                            ou
                            <a href="excluir.php?id=<?php echo $fornecedor['id']; ?>">Excluir</a></td>
                            </tr>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Nenhum fornecedor encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>