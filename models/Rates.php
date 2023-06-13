<?php

require_once __DIR__ . '/../helpers/connect.php';

class Rates
{

    private int $_idRates;
    private string $_rates;

    // ******************** id Rates ******************** //

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


    // ******************** Rate ******************** //

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

    // ******************** ADD ******************** //

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

    // ******************** Get ALL ******************** //

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

    // ******************** Get ******************** //

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
        $sqlQuery = "UPDATE `rates` 
                    SET `rates`=:rates
                    WHERE `idRate`= :id ;'";

        // Préparation sth
        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':rates', $this->_rates);
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

        $sqlQuery = 'DELETE FROM `rates`
        WHERE `idRate` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id);

        return $sth->execute();
    }

}
