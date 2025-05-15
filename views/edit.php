<a href="index.php">Voltar</a>
<h2>Editar Veículo</h2>
<form action="index.php?action=update&id=<?= $veiculo['id'] ?>" method="post">
    <label>Marca: <input type="text" name="marca" value="<?= $veiculo['marca'] ?>" required></label><br>
    <label>Modelo: <input type="text" name="modelo" value="<?= $veiculo['modelo'] ?>" required></label><br>
    <label>Ano: <input type="number" name="ano" value="<?= $veiculo['ano'] ?>" required></label><br>
    <button type="submit">Salvar</button>
</form>
