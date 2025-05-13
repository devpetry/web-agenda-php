<?php $view = __FILE__;
include 'views/layout.php'; ?>
<form action="index.php?action=store" method="post">
    <input type="text" name="marca" placeholder="Marca" required><br>
    <input type="text" name="modelo" placeholder="Modelo" required><br>
    <input type="number" name="ano" placeholder="Ano" required><br>
    <button type="submit">Salvar</button>
</form>