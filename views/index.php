<a href="index.php?action=create" class="button">Novo Veículo</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($veiculos as $v): ?>
        <tr>
            <td><?= $v['id'] ?></td>
            <td><?= $v['marca'] ?></td>
            <td><?= $v['modelo'] ?></td>
            <td><?= $v['ano'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $v['id'] ?>" class="button">Editar</a>
                <a href="index.php?action=delete&id=<?= $v['id'] ?>" class="button" onclick="return confirm('Confirma exclusão?')">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
