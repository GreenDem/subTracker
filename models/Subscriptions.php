<?php

require_once __DIR__ . '/../helpers/connect.php';


class Subscriptions
{
    private int $_idSubscription;
    // private ?string $_date_start;
    // private ?string $_date_end;
    private string $_date_payment;
    private int $_price;
    private string $_label;
    private string $_created_at;
    private string $_updated_at;
    private ?int $_idFamily = null;
    private int $_idRate;
    private ?int $_idUser = null;
    private int $_idCategory;



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

        // ******************** Label ******************** //

    /**
     * @param string $label
     * 
     * @return void
     */
    public function setLabel(string $label): void
    {
        $this->_label = $label;
    }
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->_label;
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

        // ******************** id Category ******************** //

    /**
     * @param int $idCategory
     * 
     * @return void
     */
    public function setIdcategory(int $idCategory): void
    {
        $this->_idCategory = $idCategory;
    }
    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->_idCategory;
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
            `label` ,
            `idFamily`,
            `idRate`, 
            `idUser`,
            `idCategory`)
            VALUES (
            :date_payment, 
            :price,
            :label,
            :idFamily,
            :idRate,
            :idUser,
            :idCategory
            );";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':date_payment', $this->_date_payment);
        $sth->bindValue(':price', $this->_price);
        $sth->bindValue(':label', $this->_label);
        $sth->bindValue(':idFamily', $this->_idFamily ?? null, PDO::PARAM_INT);
        $sth->bindValue(':idRate', $this->_idRate, PDO::PARAM_INT);
        $sth->bindValue(':idUser', $this->_idUser, PDO::PARAM_INT);
        $sth->bindValue(':idCategory', $this->_idCategory, PDO::PARAM_INT);

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
        $db = Database::getInstance();
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
        $db = Database::getInstance();

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
        $db = Database::getInstance();

        // Ecriture de la requête
        $sqlQuery = "UPDATE `subscriptions` 
                    SET 
                    `date_payment`=:date_payment,
                    `price`=:price,
                    `label`=:label,
                    `idRate`=:idRate,
                    `idUser`=:idUser,
                    `idCategory` = :idCategory
                    WHERE `idSubscription`= :id ;'";

        // Préparation sth
        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':date_payment', $this->_date_payment);
        $sth->bindValue(':price', $this->_price);
        // $sth->bindValue(':idFamily', $this->_idFamily, PDO::PARAM_INT);
        $sth->bindValue(':label', $this->_label);
        $sth->bindValue(':idRate', $this->_idRate, PDO::PARAM_INT);
        $sth->bindValue(':idUser', $this->_idUser, PDO::PARAM_INT);
        $sth->bindValue(':idCategory', $this->_idCategory, PDO::PARAM_INT);
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
        $db = Database::getInstance();

        $sqlQuery = 'DELETE FROM `subscriptions`
        WHERE `idSubscription` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

        // ******************** Delete By Users ******************** //
    /**
     * @param int $id
     * 
     * @return bool
     */
    public static function deleteByUser(int $id): bool
    {
        $db = Database::getInstance();

        $sqlQuery = 'DELETE FROM `subscriptions`
        WHERE `idUser` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

    // ******************** Get ALL ******************** //
    /**
     * @param int $id
     * 
     * @return array
     */
    public static function getAll(int $id): array|false
    {
        $db = Database::getInstance();


        $sql= 'SELECT 
        `categories`.`category`,
        `subscriptions`.`idSubscription`,
        `subscriptions`.`label`,
        `subscriptions`.`price`,
        `rates`.`rates`,
        `subscriptions`.`date_payment`
         FROM `users`
        LEFT JOIN `subscriptions`
        ON `users`.`idUser` = `subscriptions`.`idUser`
        INNER JOIN `categories`
        ON `categories`.`idCategory` = `subscriptions`.`idCategory`
        INNER JOIN `rates`
        ON `rates`.`idRate` = `subscriptions`.`idRate`
        WHERE `users`.`idUser` = :id ;';


        $sth = $db->prepare($sql);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        $sth->execute();
        return $sth->fetchAll();
    }


    public static function calculCost($price, $rate) :float{
        $date = new DateTime();
        $totalDay = $date->format('t');

        switch ($rate) {
            case 'Quotidienne':
                return $price*$totalDay;
                break;
            case 'Mensuelle':
                return $price;
                break;
            case 'Trimestrielle':
                return ($price/3);
                break;
            case 'Annuelle':
                return ($price/12);
                break;
            default:
                return 'error';
                break;
        }
    }

    public static function calculPayment($price, $rate, $datePayment){
        $date = new DateTime();
        $totalDay = $date->format('t');
        $month = $date->format('m');
        $date2 = new DateTime($datePayment);
        $month2 = $date2->format('m');
        

        switch ($rate) {
            case 'Quotidienne':
                return $price*$totalDay;
                break;
            case 'Mensuelle':
                return $price;
                break;
            case 'Trimestrielle':
                $trimDate = new DateTime($datePayment);
                $trimDate = $trimDate->modify('+ 3 months');
                $trimDate = $trimDate->format('m');
                $trimDate2 = new DateTime($datePayment);
                $trimDate2 = $trimDate2->modify('+ 6 months');
                $trimDate2 = $trimDate2->format('m');
                $trimDate3 = new DateTime($datePayment);
                $trimDate3 = $trimDate3->modify('+ 9 months');
                $trimDate3 = $trimDate3->format('m');
                if (($month == $month2) || ($month == $trimDate) || ($month == $trimDate2) || ($month == $trimDate3)){
                    return $price;
                } else {
                    return 0;
                }
                break;
            case 'Annuelle':
                
                if ($month == $month2){
                return ($price);
                } else {
                return 0;
                }
                break;
            
            default:
                return 'error';
                break;
        }
    }

}
