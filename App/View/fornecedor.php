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
                <?php foreach ($fornecedores as $fornecedor): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $fornecedor['id']; ?></td>
                            <td><?php echo $fornecedor['nome']; ?></td>
                            <td><?php echo $fornecedor['cnpj']; ?></td>
                            <td><?php echo $fornecedor['endereco']; ?></td>
                            <td><?php echo $fornecedor['telefone']; ?></td>
                            <td><?php echo $fornecedor['email']; ?></td>
                            <td><?php echo $fornecedor['produtos']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>