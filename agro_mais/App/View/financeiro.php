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
                        <th>receita</th>
                        <th>dispesas</th>
                        <th>lucros</th>
                    </tr>
                </thead>
                </thead>
                <?php if (isset($financeiros) && is_array($financeiros) && !empty($financeiros)): ?>
                    <?php foreach ($financeiros as $financeiro): ?>
                        <tr>
                            <td><?php echo $financeiro['id']; ?></td>
                            <td><?php echo $financeiro['receita']; ?></td>
                            <td><?php echo $financeiro['dispesas']; ?></td>
                            <td><?php echo $financeiro['lucros']; ?></td>
                            <td><a href="atualizar.php?id=<?php echo $financeiro['id']; ?>">Atualizar</a>
                            ou
                            <a href="excluir.php?id=<?php echo $financeiro['id']; ?>">Excluir</a></td>
                            </tr>
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