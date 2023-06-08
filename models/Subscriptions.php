<?php


class Subscriptions
{

    private string $_date_start;
    private string $_date_end;
    private string $_date_payment;
    private int $_tariffs;
    private string $_created_at;
    private string $_updated_at;
    private int $_idLabel;
    private int $_idRates;


    /**
     * @param mixed $dateStart
     * 
     * @return void
     */
    public function setDate_start($dateStart): void
    {
        $this->_date_start = $dateStart;
    }
    /**
     * @return string
     */
    public function getDate_start(): string
    {
        return $this->_date_start;
    }


    /**
     * @param mixed $dateEnd
     * 
     * @return void
     */
    public function setDate_end($dateEnd): void
    {
        $this->_date_end = $dateEnd;
    }
    /**
     * @return string
     */
    public function getDate_end(): string
    {
        return $this->_date_end;
    }


    /**
     * @param mixed $datePayment
     * 
     * @return void
     */
    public function setDate_payment($datePayment): void
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


    /**
     * @param mixed $tariffs
     * 
     * @return void
     */
    public function setTariffs($tariffs): void
    {
        $this->_tariffs = $tariffs;
    }
    /**
     * @return int
     */
    public function getTariffs(): int
    {
        return $this->_tariffs;
    }


    /**
     * @param mixed $created_at
     * 
     * @return void
     */
    public function setCreated_at($created_at): void
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


    /**
     * @param mixed $updated_at
     * 
     * @return void
     */
    public function setUpdated_at($updated_at): void
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

    /**
     * @param mixed $idLabel
     * 
     * @return void
     */
    public function setIdLabel($idLabel): void
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


    /**
     * @param mixed $idRates
     * 
     * @return void
     */
    public function setIdRates($idRates): void
    {
        $this->_tariffs = $idRates;
    }
    /**
     * @return int
     */
    public function getIdRates(): int
    {
        return $this->_idRates;
    }
}
