<?php
$db = new PDO('sqlite:veiculos.db');
$db->exec("CREATE TABLE IF NOT EXISTS veiculos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    marca TEXT,
    modelo TEXT,
    ano INTEGER
)");
echo "Banco de dados criado!";
