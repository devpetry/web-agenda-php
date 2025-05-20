<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <a href="index.php?action=create" class="btn btn-primary mb-3">Novo Veículo</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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
                        <a href="index.php?action=edit&id=<?= $v['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="index.php?action=delete&id=<?= $v['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirma exclusão?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>