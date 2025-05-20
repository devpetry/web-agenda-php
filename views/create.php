<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <h2 class="mb-4">Adicionar Novo Veículo</h2>

    <form action="index.php?action=store" method="post" class="mb-4">
        <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano:</label>
            <input type="number" class="form-control" id="ano" name="ano" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    <a href="index.php" class="btn btn-secondary">Voltar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>