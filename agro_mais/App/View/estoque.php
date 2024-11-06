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
                <?php if (isset($estoques) && is_array($estoques) && !empty($estoques)): ?>
                    <?php foreach ($estoques as $estoque): ?>
                            <td><?php echo $estoque['id']; ?></td>
                            <td><?php echo $estoque['nome']; ?></td>
                            <td><?php echo $estoque['categoria']; ?></td>
                            <td><?php echo $estoque['unidade']; ?></td>
                            <td><?php echo $estoque['quantidade']; ?></td>
                            <td><?php echo $estoque['entrada']; ?></td>
                            <td><?php echo $estoque['saida']; ?></td>
                            <td><?php echo $estoque['quantidade_minima']; ?></td>
                            <td><?php echo $estoque['fornecedor']; ?></td>
                            <td><a href="atualizar.php?id=<?php echo $estoque['id']; ?>">Atualizar</a>
                            ou
                            <a href="excluir.php?id=<?php echo $estoque['id']; ?>">Excluir</a></td>
                            </tr>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Nenhum estoque encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>