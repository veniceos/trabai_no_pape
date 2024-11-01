<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Clientes</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Conteudo</th>
                        <th>Autor</th>
                        <th>Imagem</th>
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