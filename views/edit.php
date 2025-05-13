<?php $view = __FILE__;
include 'views/layout.php'; ?>
<form action="index.php?action=update&id=<?= $veiculo['id'] ?>" method="post">
    <input type="text" name="marca" value="<?= $veiculo['marca'] ?>" required><br>
    <input type="text" name="modelo" value="<?= $veiculo['modelo'] ?>" required><br>
    <input type="number" name="ano" value="<?= $veiculo['ano'] ?>" required><br>
    <button type="submit">Atualizar</button>
</form>