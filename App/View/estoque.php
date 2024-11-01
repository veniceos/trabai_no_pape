<!DOCTYPE html>
<html>
<head>
    <title>Lista de estoque</title>
</head>
<body>
    <fieldset>
        <h1>Lista de estoque</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nome</th>
                        <th>categoria</th>
                        <th>unidade</th>
                        <th>quantidade</th>
                        <th>entrada</th>
                        <th>saida</th>
                        <th>quantidade minima</th>
                        <th>fornecedor</th>
                    </tr>
                </thead>
                <?php foreach ($estoques as $estoque): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $estoque['id']; ?></td>
                            <td><?php echo $estoque['nome']; ?></td>
                            <td><?php echo $estoque['categoria']; ?></td>
                            <td><?php echo $estoque['unidade']; ?></td>
                            <td><?php echo $estoque['quantidade']; ?></td>
                            <td><?php echo $estoque['entrada']; ?></td>
                            <td><?php echo $estoque['saida']; ?></td>
                            <td><?php echo $estoque['quantidade_minima']; ?></td>
                            <td><?php echo $estoque['fornecedor']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>