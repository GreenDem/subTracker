<?php

require_once __DIR__ . '/../helpers/connect.php';

class Categories
{

    private int $_idcategory;
    private string $_category;

    // ******************** id Category ******************** //
    /**
     * @param int $idcategory
     * 
     * @return void
     */
    public function setIdcategory(int $idcategory): void
    {
        $this->_idcategory = $idcategory;
    }
    /**
     * @return string
     */
    public function getidcategory(): string
    {
        return $this->_idcategory;
    }

    // ******************** Category ******************** //
    /**
     * @param string $category
     * 
     * @return void
     */
    public function setcategory(string $category): void
    {
        $this->_category = $category;
    }
    /**
     * @return string
     */
    public function getcategory(): string
    {
        return $this->_category;
    }

    // ******************** ADD ******************** //
    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `categories` (`category`)
        VALUES (:category);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':category', $this->_category);
        return $sth->execute();
    }

    // ******************** Get ALL ******************** //
    /**
     * @return array
     */
    public static function getAll(): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `categories`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    // ******************** Get ******************** //
    /**
     * @param mixed $id
     * 
     * @return array
     */
    public static function get($id): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `categories`
                WHERE `idcategory` = :id ;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}
