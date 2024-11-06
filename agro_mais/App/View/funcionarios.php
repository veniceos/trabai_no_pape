<!DOCTYPE html>
<html>
<head>
    <title>Lista de funcionarios</title>
</head>
<body>
    <fieldset>
        <h1>Lista de funcionarios</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nome</th>
                        <th>CPF</th>
                        <th>cargo</th>
                        <th>turno</th>
                        <th>jornada</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (isset($funcionarios) && is_array($funcionarios) && !empty($funcionarios)): ?>
                    <?php foreach ($funcionarios as $funcionario): ?>
                        <tr>
                            <td><?php echo $funcionario['id']; ?></td>
                            <td><?php echo $funcionario['nome']; ?></td>
                            <td><?php echo $funcionario['cpf']; ?></td>
                            <td><?php echo $funcionario['cargo']; ?></td>
                            <td><?php echo $funcionario['turno']; ?></td>
                            <td><?php echo $funcionario['jornada']; ?></td>
                            <td><a href="atualizar.php?id=<?php echo $funcionario['id']; ?>">Atualizar</a>
                            ou
                            <a href="excluir.php?id=<?php echo $funcionario['id']; ?>">Excluir</a></td>
                            </tr>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Nenhum funcionario encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>