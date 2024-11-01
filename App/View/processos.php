<!DOCTYPE html>
<html>
<head>
    <title>Lista de processos</title>
</head>
<body>
    <fieldset>
        <h1>Lista de processos</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>descrição</th>
                        <th>dados</th>
                        <th>status</th>
                        <th>responsavel</th>
                        <th>rastreamento</th>
                        <th>observações</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (isset($processos) && is_array($processos) && !empty($processos)): ?>
                    <?php foreach ($processos as $processo): ?>
                        <tr>
                            <td><?php echo $processo['id']; ?></td>
                            <td><?php echo $processo['descricao']; ?></td>
                            <td><?php echo $processo['dados']; ?></td>
                            <td><?php echo $processo['estatus']; ?></td>
                            <td><?php echo $processo['responsavel']; ?></td>
                            <td><?php echo $processo['rastreamento']; ?></td>
                            <td><?php echo $processo['observacoes']; ?></td>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Nenhum processo encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>