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
}