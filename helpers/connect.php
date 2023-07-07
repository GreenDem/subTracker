<?php
require_once __DIR__."/../config/config.php";

function connect(){
    $db = new PDO(DSN, USER, PSW);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    return $db;
}

class Database
{

    private static $_pdo;

    public static function getInstance()
    {
        if (is_null(self::$_pdo)) {
            self::$_pdo = new PDO(DSN, USER, PSW);
            self::$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        return self::$_pdo;
    }
}
?>