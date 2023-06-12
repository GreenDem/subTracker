<?php

class Logs
{

    private int $_idLogs;
    private string $_created_at;
    private float $_tariffs;
    private string $_rates;
    private int $_idSubscription;


    public function setIdLogs($idLogs): void
    {
        $this->_idLogs = $idLogs;
    }
    public function getIdLogs(): int
    {
        return $this->_idLogs;
    }

    public function setCreatedAt($created_at): void
    {
        $this->_created_at = $created_at;
    }
    public function getCreatedAt(): string
    {
        return $this->_created_at;
    }

    public function setTariffs($tariffs): void
    {
        $this->_tariffs = $tariffs;
    }
    public function getTariffs(): float
    {
        return $this->_tariffs;
    }

    public function setIdSubscriptions($idSubscriptions): void
    {
        $this->_idSubscription = $idSubscriptions;
    }
    public function getIdSubscriptions(): int
    {
        return $this->_idSubscription;
    }

    public function add(): bool
    {
        $db = connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `logs` (`tariffs`, `rates`, `idSubscription`)
                    VALUES (:tariffs, :rates, :idSubscription);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':tariffs', $this->_tariffs);
        $sth->bindValue(':rates', $this->_rates);
        $sth->bindValue(':idSubscription', $this->_idSubscription);
        return $sth->execute();
    }

    public static function getAll(): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `logs`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    public static function get($id): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `logs`
                WHERE `idLogs = :id`;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}
