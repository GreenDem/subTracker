<?php

class Users_Subscriptions{

    private int $_idUsers;
    private int $_idSubscriptions;

    public function setIdUsers($idUsers): void{
        $this->_idUsers = $idUsers;
    }
    public function getIdUsers(): int{
        return $this->_idUsers;
    }


    /**
     * @param mixed $idSubscriptions
     * 
     * @return void
     */
    public function setIdSubscriptions($idSubscriptions): void{
        $this->_idSubscriptions = $idSubscriptions;
    }
    /**
     * @return int
     */
    public function getIdSubscriptions(): int{
        return $this->_idSubscriptions;
    }
}