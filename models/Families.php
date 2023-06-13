<?php

require_once __DIR__ . '/../helpers/connect.php';

class Families
{
    private int $_idFamily;
    private string $_name;
    private int $_idUser;


    // ******************** id Family ******************** //
    /**
     * @param int $idFamily
     * 
     * @return void
     */
    public function setIdFamily(int $idFamily): void
    {
        $this->_idFamily = $idFamily;
    }
    /**
     * @return int
     */
    public function getIdFamily(): int
    {
        return $this->_idFamily;
    }

    // ******************** Name ******************** //
    /**
     * @param string $name
     * 
     * @return void
     */
    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }


    // ******************** id User ******************** //
    /**
     * @param int $idUser
     * 
     * @return void
     */
    public function setIdUser(int $idUser): void
    {
        $this->_idUser = $idUser;
    }
    /**
     * @return int
     */
    public function getIduser(): int
    {
        return $this->_idUser;
    }


    // ******************** ADD ******************** //

    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `families` (`name`)
        VALUES (:familyName);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':familyName', $this->_name);
        return $sth->execute();
    }

    // ******************** Get All ******************** //
    /**
     * @return array
     */
    public static function getAll(): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `families`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    // ******************** Get ******************** //
    /**
     * @param int $id
     * 
     * @return array
     */
    public static function get(int $id): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `families`
                WHERE `idFamily` = :id ;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
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
        $db = connect();

        $sqlQuery = "UPDATE `families` 
                    SET `name`=:familyName,
                    `idUser`=:idUser,
                    WHERE `idFamily`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':familyName', $this->_name);
        $sth->bindValue(':idUser', $this->_idUser);
        $sth->bindValue(':id', $id);

        return $sth->execute();
    }

    // ******************** Delete ******************** //
    /**
     * @param int $id
     * 
     * @return bool
     */
    public static function delete(int $id): bool
    {
        $db = connect();

        $sqlQuery = 'DELETE FROM `families`
        WHERE `idFamily` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':idFamily', $id);

        return $sth->execute();
    }

}
