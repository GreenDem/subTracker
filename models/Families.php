<?php

require_once __DIR__ . '/../helpers/connect.php';

Class Families {
    private int $_idFamily;
    private string $_name;

    public function setIdFamily(int $idFamily): void{
        $this->_idFamily = $idFamily;
    }
    public function getIdFamily(): int{
        return $this->_idFamily;
    }

    public function setName(string $name): void{
        $this->_name = $name;
    }

    public function getName(): string {
        return $this->_name;
    }

    public function add(): bool{
        $db= connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `families` (`name`)
        VALUES (:name);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':name', $this->_name);
        return $sth->execute();
        }

    public static function getAll() : array{
        $db= connect();
        $sql = 'SELECT * FROM `families`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    public static function get($id) : array{
        $db= connect();
        $sql = 'SELECT * FROM `families`
                WHERE `idFamily = :id`;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}