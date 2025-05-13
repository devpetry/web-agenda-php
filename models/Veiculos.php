<?php
require_once 'config/database.php';

class Veiculo
{
    public static function all()
    {
        $db = Database::connect();
        return $db->query('SELECT * FROM veiculos')->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM veiculos WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Database::connect();
        $stmt = $db->prepare('INSERT INTO veiculos (marca, modelo, ano) VALUES (?, ?, ?)');
        $stmt->execute([$data['marca'], $data['modelo'], $data['ano']]);
    }

    public static function update($id, $data)
    {
        $db = Database::connect();
        $stmt = $db->prepare('UPDATE veiculos SET marca = ?, modelo = ?, ano = ? WHERE id = ?');
        $stmt->execute([$data['marca'], $data['modelo'], $data['ano'], $id]);
    }

    public static function delete($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare('DELETE FROM veiculos WHERE id = ?');
        $stmt->execute([$id]);
    }
}
