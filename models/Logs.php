<?php

class Logs{

    private int $_idLogs;
    private string $_created_at;
    private float $_tariffs;
    private string $_rates;
    private int $_idSubscriptions;


    public function setIdLogs($idLogs): void{
        $this->_idLogs = $idLogs;
    }
    public function getIdLogs(): int{
        return $this->_idLogs;
    }

    public function setCreatedAt($created_at): void{
        $this->_created_at = $created_at;
    }
    public function getCreatedAt(): string{
        return $this->_created_at;
    }

    public function setTariffs($tariffs): void{
        $this->_tariffs = $tariffs;
    }
    public function getTariffs(): float{
        return $this->_tariffs;
    }

    public function setIdSubscriptions($idSubscriptions): void{
        $this->_idSubscriptions = $idSubscriptions;
    }
    public function getIdSubscriptions(): int {
        return $this->_idSubscriptions;
    }
}