<h2>Editar Veículo</h2>

<form action="index.php?action=update&id=<?= $veiculo['id'] ?>" method="post">
    <label>Marca:</label>
    <input type="text" name="marca" value="<?= $veiculo['marca'] ?>" required>

    <label>Modelo:</label>
    <input type="text" name="modelo" value="<?= $veiculo['modelo'] ?>" required>

    <label>Ano:</label>
    <input type="number" name="ano" value="<?= $veiculo['ano'] ?>" required>

    <input type="submit" value="Atualizar">
</form>

<a href="index.php" class="button">Voltar</a>
