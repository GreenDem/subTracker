<?php

class Users {

    private string $_lastname;
    private string $_firstname;
    private string $_mail;
    private string $_password;
    private string $_created_at;
    private string $_updated_at;
    private string $_validated_at;


    /**
     * @param mixed $lastname
     * 
     * @return void
     */
    public function setLastname($lastname):void{
        $this->_lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getLastname():string {
        return $this->_lastname;
    }


    /**
     * @param mixed $firstname
     * 
     * @return void
     */
    public function setFirstname($firstname): void{
        $this->_firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string{
        return $this->_firstname;
    }


    /**
     * @param mixed $mail
     * 
     * @return void
     */
    public function setMail($mail): void{
        $this->_mail = $mail;
    }

    /**
     * @return string
     */
    public function getMail(): string{
        return $this->_mail;
    }


    /**
     * @param mixed $password
     * 
     * @return void
     */
    public function setPassword($password): void{
        $this->_password = $password;
    }

    /**
     * @return string
     */
    public function getPassword(): string{
        return $this->_password;
    }


    /**
     * @param mixed $created_at
     * 
     * @return void
     */
    public function setCreated_at($created_at): void{
        $this->_created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getCreated_at(): string{
        return $this->_created_at;
    }


    /**
     * @param mixed $updated_at
     * 
     * @return void
     */
    public function setUpdated_at($updated_at): void{
        $this->_updated_at = $updated_at;
    }

    /**
     * @return string
     */
    public function getupdated_at(): string{
        return $this->_updated_at;
    }


    /**
     * @param mixed $validated_at
     * 
     * @return void
     */
    public function setValidated_at($validated_at): void{
        $this->_validated_at = $validated_at;
    }

    /**
     * @return string
     */
    public function getValidated_at() : string{
        return $this->_validated_at;
    }

} 
    

