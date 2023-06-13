<?php

require_once __DIR__ . '/../helpers/connect.php';

class Users
{

    private int $_idUser;
    private string $_lastname;
    private string $_firstname;
    private string $_mail;
    private string $_password;
    private string $_created_at;
    private string $_updated_at;
    private string $_validated_at;

    // ******************** Id User ******************** //
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
    public function getIdUser(): int
    {
        return $this->_idUser;
    }


    // ******************** Last Name ******************** //
    /**
     * @param string $lastname
     * 
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->_lastname = $lastname;
    }
    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->_lastname;
    }

    // ******************** First Name ******************** //
    /**
     * @param string $firstname
     * 
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->_firstname = $firstname;
    }
    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->_firstname;
    }

    // ******************** Mail ******************** //
    /**
     * @param string $mail
     * 
     * @return void
     */
    public function setMail(string $mail): void
    {
        $this->_mail = $mail;
    }
    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->_mail;
    }

    // ******************** Id User ******************** //

    /**
     * @param string $password
     * 
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->_password;
    }

    // ******************** Id User ******************** //
    /**
     * @param string $created_at
     * 
     * @return void
     */
    public function setCreated_at(string $created_at): void
    {
        $this->_created_at = $created_at;
    }
    /**
     * @return string
     */
    public function getCreated_at(): string
    {
        return $this->_created_at;
    }

    // ******************** Id User ******************** //
    /**
     * @param string $updated_at
     * 
     * @return void
     */
    public function setUpdated_at(string $updated_at): void
    {
        $this->_updated_at = $updated_at;
    }
    /**
     * @return string
     */
    public function getupdated_at(): string
    {
        return $this->_updated_at;
    }

    // ******************** Id User ******************** //
    /**
     * @param string $validated_at
     * 
     * @return void
     */
    public function setValidated_at(string $validated_at): void
    {
        $this->_validated_at = $validated_at;
    }

    /**
     * @return string
     */
    public function getValidated_at(): string
    {
        return $this->_validated_at;
    }


    // ******************** ADD ******************** // 
    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = connect();

        $sqlQuery = "INSERT INTO `users` (
            `lastname`, 
            `firstname`, 
            `mail`, 
            `password`)
            VALUES (
            :lastname, 
            :firstname, 
            :mail, 
            :userPassword);";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':lastname', $this->_lastname);
        $sth->bindValue(':firstname', $this->_firstname);
        $sth->bindValue(':mail', $this->_mail);
        $sth->bindValue(':userPassword', $this->_password);

        return $sth->execute();
    }

    // ******************** Get ALL ******************** //
    /**
     * @return array
     */
    public static function getAll(): array
    {
        $db = connect();

        $sql = 'SELECT * FROM `users`;';

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

        $sql = 'SELECT * FROM `users`
                WHERE `idUser` = :id ;';

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

        $sqlQuery = "UPDATE `users` 
                    SET `lastName`=:lastname,
                    `firstName`=:firstname,
                    `mail`=:mail
                    WHERE `idUser`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':lastname', $this->_lastname);
        $sth->bindValue(':firstname', $this->_firstname);
        $sth->bindValue(':mail', $this->_mail);
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

        $sqlQuery = 'DELETE FROM `users`
        WHERE `idUser` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id);

        return $sth->execute();
    }
}
