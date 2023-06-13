<?php

require_once __DIR__ . '/../helpers/connect.php';

class Logs
{

    private int $_idLogs;
    private string $_created_at;
    private float $_price;
    private string $_idRate;
    private int $_idSubscription;


    // ******************** id Logs ******************** //

    /**
     * @param int $idLogs
     * 
     * @return void
     */
    public function setIdLogs(int $idLogs): void
    {
        $this->_idLogs = $idLogs;
    }
    /**
     * @return int
     */
    public function getIdLogs(): int
    {
        return $this->_idLogs;
    }

    // ******************** id Created AT ******************** //

    /**
     * @param string $created_at
     * 
     * @return void
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->_created_at = $created_at;
    }
    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->_created_at;
    }

    // ******************** price ******************** //

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

    // ******************** id Subscriptions ******************** //

    /**
     * @param int $idSubscriptions
     * 
     * @return void
     */
    public function setIdSubscriptions(int $idSubscriptions): void
    {
        $this->_idSubscription = $idSubscriptions;
    }
    /**
     * @return int
     */
    public function getIdSubscriptions(): int
    {
        return $this->_idSubscription;
    }

    // ******************** ADD ******************** //

    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `logs` (`price`, `idRate`, `idSubscription`)
                    VALUES (:price, :idRate, :idSubscription);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':price', $this->_price);
        $sth->bindValue(':idRate', $this->_idRate);
        $sth->bindValue(':idSubscription', $this->_idSubscription);
        return $sth->execute();
    }

    // ******************** Get ALL ******************** //
    /**
     * @return mixed
     */
    public static function getAll(): array|false
    {
        $db = connect();
        $sql = 'SELECT * FROM `logs`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    // ******************** Get ******************** //

    /**
     * @param int $id
     * 
     * @return array
     */
    public static function get(int $id): mixed
    {
        $db = connect();

        $sql = 'SELECT * FROM `logs`
                WHERE `idLog` = :id ;';

        $sth = $db->prepare($sql);

        $sth->bindValue(':id', $id,PDO::PARAM_INT);

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
        $sqlQuery = "UPDATE `logs` 
                    SET `price`=:price,
                    `idRate`=:idRate,
                    `idSubscription`=:idSubscription
                    WHERE `idLog`= :id ;'";

        // Préparation sth
        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':price', $this->_price);
        $sth->bindValue(':idRate', $this->_idRate);
        $sth->bindValue(':idSubscription', $this->_idSubscription);
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

        $sqlQuery = 'DELETE FROM `logs`
        WHERE `idLog` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        return $sth->execute();
    }

}
