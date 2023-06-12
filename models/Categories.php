<?php 

class Categories{

    private int $_idcategory;
    private string $_category;

    public function setIdcategory($idcategory): void{
        $this->_idcategory = $idcategory;
    }
    public function getidcategory():string {
        return $this->_idcategory;
    }


    public function setcategory($category): void{
        $this->_category = $category;
    }
    public function getcategory():string {
        return $this->_category;
    }

    public function add(): bool{
        $db= connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `categories` (`category`)
        VALUES (:category);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':category', $this->_category);
        return $sth->execute();
        }

    public static function getAll() : array{
        $db= connect();
        $sql = 'SELECT * FROM `categories`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    public static function get($id) : array{
        $db= connect();
        $sql = 'SELECT * FROM `categories`
                WHERE `idcategory = :id`;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}