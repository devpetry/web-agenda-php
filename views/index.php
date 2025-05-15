<a href="index.php?action=create">Novo Veículo</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($veiculos as $v): ?>
        <tr>
            <td><?= $v['id'] ?></td>
            <td><?= $v['marca'] ?></td>
            <td><?= $v['modelo'] ?></td>
            <td><?= $v['ano'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $v['id'] ?>">Editar</a>
                <a href="index.php?action=delete&id=<?= $v['id'] ?>" onclick="return confirm('Confirma exclusão?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>