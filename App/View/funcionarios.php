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
                        <th>horario</th>
                        <th>jornada</th>
                    </tr>
                </thead>
                <?php foreach ($funcionarios as $funcionario): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $funcionario['id']; ?></td>
                            <td><?php echo $funcionario['nome']; ?></td>
                            <td><?php echo $funcionario['cpf']; ?></td>
                            <td><?php echo $funcionario['cargo']; ?></td>
                            <td><?php echo $funcionario['horario']; ?></td>
                            <td><?php echo $funcionario['jornada']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>