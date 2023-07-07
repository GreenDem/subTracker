<?php

require_once __DIR__ . '/../helpers/connect.php';


class Subscriptions
{
    private int $_idSubscription;
    // private ?string $_date_start;
    // private ?string $_date_end;
    private string $_date_payment;
    private int $_price;
    private string $_created_at;
    private string $_updated_at;
    private ?int $_idFamily;
    private int $_idLabel;
    private int $_idRate;
    private ?int $_idUser;


    // ******************** Id Subscription ******************** //
    /**
     * @param int $idSubscription
     * 
     * @return void
     */
    public function setIdSubscription(int $idSubscription): void
    {
        $this->_idSubscription = $idSubscription;
    }
    /**
     * @return int
     */
    public function getIdSubscription(): int
    {
        return $this->_idSubscription;
    }

    // // ******************** Date Start ******************** //
    // /**
    //  * @param string $dateStart
    //  * 
    //  * @return void
    //  */
    // public function setDate_start(?string $dateStart): void
    // {
    //     $this->_date_start = $dateStart;
    // }
    // /**
    //  * @return string
    //  */
    // public function getDate_start(): string
    // {
    //     return $this->_date_start;
    // }

    // // ******************** Date End ******************** //
    // /**
    //  * @param string $dateEnd
    //  * 
    //  * @return void
    //  */
    // public function setDate_end(?string $dateEnd): void
    // {
    //     $this->_date_end = $dateEnd;
    // }
    // /**
    //  * @return string
    //  */
    // public function getDate_end(): string
    // {
    //     return $this->_date_end;
    // }

    // ******************** Date Payment ******************** //
    /**
     * @param string $datePayment
     * 
     * @return void
     */
    public function setDate_payment(string $datePayment): void
    {
        $this->_date_payment = $datePayment;
    }
    /**
     * @return string
     */
    public function getDate_payment(): string
    {
        return $this->_date_payment;
    }

    // ******************** PRICE ******************** //
    /**
     * @param float $price
     * 
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->_price = $price;
    }
    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->_price;
    }

    // ******************** Created At ******************** //
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

    // ******************** Updated At ******************** //
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
    public function getUpdated_at(): string
    {
        return $this->_updated_at;
    }

    // ******************** id Family ******************** //
    /**
     * @param int $idLabel
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


    // ******************** id Label ******************** //
    /**
     * @param int $idLabel
     * 
     * @return void
     */
    public function setIdLabel(int $idLabel): void
    {
        $this->_idLabel = $idLabel;
    }
    /**
     * @return int
     */
    public function getIdLabel(): int
    {
        return $this->_idLabel;
    }

    // ******************** id Rate ******************** //
    /**
     * @param int $idRate
     * 
     * @return void
     */
    public function setIdRate(int $idRate): void
    {
        $this->_idRate = $idRate;
    }
    /**
     * @return int
     */
    public function getIdRate(): int
    {
        return $this->_idRate;
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
    public function getIdUser(): int
    {
        return $this->_idUser;
    }

    // ******************** ADD ******************** // --- parametre nullable a lors de l'hydratation
    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = Database::getInstance();

        $sqlQuery = "INSERT INTO `subscriptions` ( 
            `date_payment`, 
            `price`, 
            `idFamily`,
            `idLabel`, 
            `idRate`, 
            `idUser` )
            VALUES (
            :date_payment, 
            :price,
            :idFamily,
            :idLabel,
            :idRate,
            :idUser
            );";

        $sth = $db->prepare($sqlQuery);

        // $sth->bindValue(':date_start', $this->_date_start);
        // $sth->bindValue(':date_end', $this->_date_end);
        $sth->bindValue(':date_payment', $this->_date_payment);
        $sth->bindValue(':price', $this->_price);
        $sth->bindValue(':idFamily', $this->_idFamily ?? null, PDO::PARAM_INT);
        $sth->bindValue(':idLabel', $this->_idLabel, PDO::PARAM_INT);
        $sth->bindValue(':idRate', $this->_idRate, PDO::PARAM_INT);
        $sth->bindValue(':idUser', $this->_idUser, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

    // ******************** Get ALL ******************** //

    /**
     * @return array|false
     */
    public static function getyAll(): array|false
    {
        $db = connect();
        $sql = 'SELECT * FROM `subscriptions`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    // ******************** Get ******************** //
    /**
     * @param int $id
     * 
     * @return mixed
     */
    public static function get(int $id): object|false
    {
        $db = connect();

        $sql = 'SELECT * FROM `subscriptions`
                WHERE `idSubscription` = :id ;';

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

        // Ecriture de la requête
        $sqlQuery = "UPDATE `users` 
                    SET `date_start`=:date_start,
                    `date_end`=:date_end,
                    `date_payment`=:date_payment,
                    `price`=:price,
                    `idFamily`=:idFamily,
                    `idLabel`=:idLabel,
                    `idRate`=:idRate,
                    `idUser`=:idUser
                    WHERE `idSubscription`= :id ;'";

        // Préparation sth
        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':date_start', $this->_date_start);
        $sth->bindValue(':date_end', $this->_date_end);
        $sth->bindValue(':date_payment', $this->_date_payment);
        $sth->bindValue(':price', $this->_price);
        $sth->bindValue(':idFamily', $this->_idFamily, PDO::PARAM_INT);
        $sth->bindValue(':idLabel', $this->_idLabel, PDO::PARAM_INT);
        $sth->bindValue(':idRate', $this->_idRate, PDO::PARAM_INT);
        $sth->bindValue(':idUser', $this->_idUser, PDO::PARAM_INT);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);

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

        $sqlQuery = 'DELETE FROM `subscriptions`
        WHERE `idSubscription` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        return $sth->execute();
    }


    // ******************** Get ALL ******************** //


    /**
     * @param int $id
     * 
     * @return array
     */
    public static function getAll(int $id): array|false
    {
        $db = connect();
        $sql = 'SELECT * FROM `categories`
        INNER JOIN `labels` ON `categories`.`idCategory` = `labels`.`idCategory`
        RIGHT JOIN `subscriptions` ON `labels`.`idLabel` = `subscriptions`.`idLabel`
        LEFT JOIN `rates` ON `rates`.`idRate` = `subscriptions`.`idRate`
        INNER JOIN `users` ON `subscriptions`.`idUser` = `users`.`idUser`
        WHERE `users`.`idUser` = :id;';
        $sth = $db->prepare($sql);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        $sth->execute();
        return $sth->fetchAll();
    }
}
