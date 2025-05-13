<?php
class Database
{
    private static $dbName = 'veiculos.db';
    private static $conn = null;

    public static function connect()
    {
        if (self::$conn === null) {
            self::$conn = new PDO('sqlite:' . self::$dbName);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
}
