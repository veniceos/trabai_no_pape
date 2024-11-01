<!DOCTYPE html>
<html>
<head>
    <title>Lista de financeiros</title>
</head>
<body>
    <fieldset>
        <h1>Lista de financeiros</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>vendas</th>
                        <th>dispesas</th>
                        <th>lucros</th>
                    </tr>
                </thead>
                <?php foreach ($financeiros as $financeiro): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $financeiro['id']; ?></td>
                            <td><?php echo $financeiro['vendas']; ?></td>
                            <td><?php echo $financeiro['dispesas']; ?></td>
                            <td><?php echo $financeiro['lucros']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>