<?php

class Labels {
    private int $_idLabels;
    private string $_label;
    private string $_url;
    private string $_logo;
    private int $_idCategory;


    /**
     * @param mixed $idLabels
     * 
     * @return void
     */
    public function setIdLabels($idLabels): void{
        $this->_idLabels = $idLabels;
    }
    /**
     * @return int
     */
    public function getIdLabels(): int{
        return $this->_idLabels;
    }


    /**
     * @param mixed $label
     * 
     * @return void
     */
    public function setLabel($label): void{
        $this->_label = $label; 
    }
    /**
     * @return string
     */
    public function getLabel(): string{
        return $this->_label;
    }


    /**
     * @param mixed $url
     * 
     * @return void
     */
    public function setUrl($url): void{
        $this->_url = $url;
    }
    /**
     * @return string
     */
    public function getUrl(): string {
        return $this->_url;
    }


    /**
     * @param mixed $logo
     * 
     * @return void
     */
    public function setLogo($logo): void{
        $this->_logo = $logo;
    }
    /**
     * @return string
     */
    public function getLogo(): string{
        return $this->_logo;
    }


    /**
     * @param mixed $idCategory
     * 
     * @return void
     */
    public function setIdcategory($idCategory): void{
        $this->_idCategory = $idCategory;
    }
    /**
     * @return int
     */
    public function getCategory(): int{
        return $this->_idCategory;
    }

    public function add(): bool{
        $db= connect();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `labels` (`label`,`url`,`logo`,`idCategory`)
        VALUES (:label, :labelUrl, :logo, :idCategory);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':label', $this->_label);
        $sth->bindValue(':labelUrl', $this->_url);
        $sth->bindValue(':logo', $this->_logo);
        $sth->bindValue(':idCategory', $this->_idCategory);
        return $sth->execute();
        }

    public static function getAll() : array{
        $db= connect();
        $sql = 'SELECT * FROM `labels`;';
        $sth = $db->query($sql);
        return $sth->fetchall();
    }

    public static function get($id) : array{
        $db= connect();
        $sql = 'SELECT * FROM `labels`
                WHERE `idLables = :id`;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id);
        return $sth->fetch();
    }
}