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
     * @return mixed
     */
    public static function getAll(): array|false
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
    public static function get(int $id): mixed
    {
        $db = connect();

        $sql = 'SELECT * FROM `categories`
                WHERE `idCategory` = :id ;';

        $sth = $db->prepare($sql);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        $sth->execute();

        return $sth->fetch();
    }
    // ******************** Update ******************** //
    /**
     * @param int $id
     * 
     * @return bool
     */
    public function update(int $id): bool
    {
        $db = Database::getInstance();

        // $sqlQuery = "UPDATE `categories` 
        //             SET `category`= :category,
        //             WHERE `idCategory`= :id ;";

        $sqlQuery = "UPDATE `categories` 
        SET `category` = :category 
        WHERE `categories`.`idCategory` = :id   ; ";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':category', $this->_category);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

    // ******************** Delete ******************** //
    /**
     * @param int $id
     * 
     * @return bool
     */
    public static function delete(int $id): bool
    {
        $db = Database::getInstance();

        $sqlQuery = 'DELETE FROM `categories` 
        WHERE `categories`.`idCategory` = :id ' ;

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

    // public static function isExist(string $category): mixed
    // {
    //     $db = connect();

    //     $sql = 'SELECT * FROM `categories`
    //             WHERE `idCategory` = :id ;';

    //     $sth = $db->prepare($sql);

    //     $sth->bindValue(':id', $id, PDO::PARAM_INT);

    //     $sth->execute();

    //     return $sth->fetch();
    // }

    public static function catLogo( string $category) : string {

        switch ($category) {
            case 'Musique':
                return '/public/assets/img/deezerLogo.jpg';
                break;
            case 'Vidéo':
                return '/public/assets/img/video.png';
                break;
            case 'Sport':
                return '/public/assets/img/sport.png';
                break;
            case 'Finance':
                return '/public/assets/img/finance.png';
                break;
            case 'Charges':
                return '/public/assets/img/charges.png';
                break;

            
            default:
                return "/public/assets/img/autres.png";
                break;
        }

    }
}
