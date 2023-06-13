<?php

require_once __DIR__ . '/../helpers/connect.php';

class Logs
{

    private int $_idLogs;
    private string $_created_at;
    private float $_tariffs;
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

    // ******************** Tariffs ******************** //

    /**
     * @param float $tariffs
     * 
     * @return void
     */
    public function setTariffs(float $tariffs): void
    {
        $this->_tariffs = $tariffs;
    }
    /**
     * @return float
     */
    public function getTariffs(): float
    {
        return $this->_tariffs;
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
        $sqlQuery = "INSERT INTO `logs` (`tariffs`, `idRate`, `idSubscription`)
                    VALUES (:tariffs, :idRate, :idSubscription);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':tariffs', $this->_tariffs);
        $sth->bindValue(':idRate', $this->_idRate);
        $sth->bindValue(':idSubscription', $this->_idSubscription);
        return $sth->execute();
    }

    // ******************** Get ALL ******************** //

    /**
     * @return array
     */
    public static function getAll(): array
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
    public static function get(int $id): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `logs`
                WHERE `idLog` = :id ;';
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

        // Ecriture de la requête
        $sqlQuery = "UPDATE `logs` 
                    SET `tariffs`=:tariffs,
                    `idRate`=:idRate,
                    `idSubscription`=:idSubscription
                    WHERE `idLog`= :id ;'";

        // Préparation sth
        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':tariffs', $this->_tariffs);
        $sth->bindValue(':idRate', $this->_idRate);
        $sth->bindValue(':idSubscription', $this->_idSubscription);
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

        $sqlQuery = 'DELETE FROM `logs`
        WHERE `idLog` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id);

        return $sth->execute();
    }

}
