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
                        <th>nome</th>
                        <th>email</th>
                        <th>telefone</th>
                        <th>CPF</th>
                        <th>endereço</th>
                        <th>histórico</th>
                    </tr>
                </thead>
                <?php foreach ($clientes as $cliente): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $cliente['id']; ?></td>
                            <td><?php echo $cliente['nome']; ?></td>
                            <td><?php echo $cliente['email']; ?></td>
                            <td><?php echo $cliente['telefone']; ?></td>
                            <td><?php echo $cliente['CPF']; ?></td>
                            <td><?php echo $cliente['endereco']; ?></td>
                            <td><?php echo $cliente['historico']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>