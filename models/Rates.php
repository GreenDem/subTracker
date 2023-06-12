<?php

require_once __DIR__ . '/../helpers/connect.php';

class Rates
{

    private int $_idRates;
    private string $_rates;

    // ******************** id Logs ******************** //

    /**
     * @param int $idRates
     * 
     * @return void
     */
    public function setIdRate(int $idRates): void
    {
        $this->_idRates = $idRates;
    }
    /**
     * @return string
     */
    public function getidRate(): string
    {
        return $this->_idRates;
    }


    // ******************** id Logs ******************** //

    /**
     * @param string $rates
     * 
     * @return void
     */
    public function setRates(string $rates): void
    {
        $this->_rates = $rates;
    }
    /**
     * @return string
     */
    public function getRates(): string
    {
        return $this->_rates;
    }

    // ******************** id Logs ******************** //

    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `rates` (`rates`)
        VALUES (:rates);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':rates', $this->_rates);
        return $sth->execute();
    }

    // ******************** id Logs ******************** //

    /**
     * @return array
     */
    public static function getAll(): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `rates`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    // ******************** id Logs ******************** //

    /**
     * @param int $id
     * 
     * @return array
     */
    public static function get(int $id): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `rates`
                WHERE `idRates` = :id ;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}
