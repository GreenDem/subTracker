<?php 

class Rates{

    private int $_idRates;
    private string $_rates;

    public function setIdRates($idRates): void{
        $this->_idRates = $idRates;
    }
    public function getidRates():string {
        return $this->_idRates;
    }


    public function setRates($rates): void{
        $this->_rates = $rates;
    }
    public function getRates():string {
        return $this->_rates;
    }

    public function add(): bool{
        $db= connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `rates` (`rates`)
        VALUES (:rates);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':rates', $this->_rates);
        return $sth->execute();
        }

    public static function getAll() : array{
        $db= connect();
        $sql = 'SELECT * FROM `rates`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    public static function get($id) : array{
        $db= connect();
        $sql = 'SELECT * FROM `rates`
                WHERE `idRates = :id`;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}