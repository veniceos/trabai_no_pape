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
                </thead>
                <?php if (isset($financeiros) && is_array($financeiros) && !empty($financeiros)): ?>
                    <?php foreach ($financeiros as $financeiro): ?>
                        <tr>
                            <td><?php echo $financeiro['id']; ?></td>
                            <td><?php echo $financeiro['vendas']; ?></td>
                            <td><?php echo $financeiro['dispesas']; ?></td>
                            <td><?php echo $financeiro['lucros']; ?></td>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Nenhum financeiro encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>