<?php

require_once __DIR__ . '/../helpers/connect.php';

class Users
{

    private int $_idUser;
    private string $_lastname;
    private string $_firstname;
    private string $_mail;
    private string $_password;
    private ?int $_admin;
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

    // ******************** Password ******************** //

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


    // ******************** Password ******************** //

    /**
     * @param string $password
     * 
     * @return void
     */
    public function setAdmin(?int $admin): void
    {
        $this->_admin = $admin;
    }
    /**
     * @return string
     */
    public function getAdmin(): string
    {
        return $this->_admin;
    }

    // ******************** Created AT ******************** //
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

    // ******************** Updated AT ******************** //
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

    // ******************** Validated At ******************** //
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

    public static function getAll($page, $search=null): array|false
    {
        $db = Database::getInstance();

        $sql = 'SELECT COUNT(*) OVER() as total ,`idUser`, `lastname`, `firstname`, `admin`, `updated_at`, `mail` 
        FROM `users`
        WHERE `lastname` LIKE :search OR `firstname` LIKE :search OR `admin` LIKE :search
        GROUP BY `idUser`
        ORDER BY `lastname`, `firstname`
        LIMIT :lim OFFSET :os ;';

        $lim =  10;
        $os = ($page - 1) * 10;

        $sth = $db->prepare($sql);

        // Préparation
        $sth = $db->prepare($sql);
        $sth->bindValue(':search', '%' . $search . '%');
        $sth->bindValue(':lim', $lim, PDO::PARAM_INT);
        $sth->bindValue(':os', $os, PDO::PARAM_INT);

        $sth->execute();

        return $sth->fetchall();
    }

    // ******************** Get ******************** //
    /**
     * @param int $id
     * 
     * @return mixed
     */
    public static function get(int $id): mixed
    {
        $db = connect();

        $sql = 'SELECT * FROM `users`
                WHERE `idUser` = :id ;';

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
        $db = connect();

        $sqlQuery = "UPDATE `users` 
                    SET `lastName`=:lastname,
                    `firstName`=:firstname
                    WHERE `idUser`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':lastname', $this->_lastname);
        $sth->bindValue(':firstname', $this->_firstname);
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

        $sqlQuery = 'DELETE FROM `users`
        WHERE `idUser` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

    public static function isMailExists(string $mail): bool|object
    {
        $db = connect();
        $sql = 'SELECT * FROM `users` WHERE `mail` = :mail';

        $sth = $db->prepare($sql);
        $sth->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sth->execute();

        return $sth->fetch();
    }


    public static function checkUser()
    {
        if (!empty($_COOKIE['user'])) {
            $cookie = $_COOKIE['user'];
            $cookieDecode = JWT::get($cookie);
            if ($cookieDecode) {
                $_SESSION['user'] = $cookieDecode;
            }
        }
        if (empty($_SESSION['user'])) {
            header('location: /../index.php?action=signIn');
            die;
        }
    }

    public static function checkAdmin()
    {
        if ($_SESSION['user']->admin != 1) {
            header('location: /../index.php');
            die;
        }
    }

    public function updateAdmin(int $id): bool
    {
        $db = connect();

        $sqlQuery = "UPDATE `users` 
                    SET `lastName`=:lastname,
                    `firstName`=:firstname,
                    `admin`=:admin
                    WHERE `idUser`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':lastname', $this->_lastname);
        $sth->bindValue(':firstname', $this->_firstname);
        $sth->bindValue(':admin', $this->_admin, PDO::PARAM_INT);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }


    // ******************** Update Psw ******************** //
    /**
     * @param int $id
     * 
     * @return bool
     */
    public function updatePsw(int $id): bool
    {
        $db = connect();

        $sqlQuery = "UPDATE `users` 
                    SET `password`=:password
                    WHERE `idUser`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':password', $this->_password);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }


        // ******************** Count for pagination ******************** //

    /**Count Number of users
     * @return int
     */
    public static function count(): int
    {
        $db = Database::getInstance();

        $sqlQuery = 'SELECT COUNT(idUser) AS `usersNb`
        FROM `users`
        ORDER BY `idUser`;';

        // Préparation
        $sth = $db->prepare($sqlQuery);

        $sth->execute();

        return $sth->fetchColumn();
    }

}
