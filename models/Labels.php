<?php

require_once __DIR__ . '/../helpers/connect.php';

class Labels
{
    private int $_idLabel;
    private string $_label;
    private string $_url;
    private string $_logo;
    private int $_idCategory;


    // ******************** id Label ******************** //

    /**
     * @param int $idLabel
     * 
     * @return void
     */
    public function setIdLabel(int $idLabel): void
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


    // ******************** Label ******************** //

    /**
     * @param string $label
     * 
     * @return void
     */
    public function setLabel(string $label): void
    {
        $this->_label = $label;
    }
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->_label;
    }


    // ******************** Url ******************** //

    /**
     * @param string $url
     * 
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->_url = $url;
    }
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->_url;
    }


    // ******************** Logo ******************** //

    /**
     * @param string $logo
     * 
     * @return void
     */
    public function setLogo(string $logo): void
    {
        $this->_logo = $logo;
    }
    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->_logo;
    }


    // ******************** id Category ******************** //

    /**
     * @param int $idCategory
     * 
     * @return void
     */
    public function setIdcategory(int $idCategory): void
    {
        $this->_idCategory = $idCategory;
    }
    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->_idCategory;
    }


    // ******************** ADD ******************** //

    /**
     * @return bool
     */
    public function add(): bool
    {
        $db = connect();
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

    // ******************** Get ALL ******************** //

    /**
     * @return array
     */
    public static function getAll(): array
    {
        $db = connect();
        $sql = 'SELECT * FROM `labels`;';
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
        $sql = 'SELECT * FROM `labels`
                WHERE `idLables` = :id ;';
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

        $sqlQuery = "UPDATE `logs` 
                    SET `label`=:label,
                    `labelUrl`=:labelUrl,
                    `logo`=:logo
                    `idCategory`=:idCategory
                    WHERE `idLog`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':label', $this->_label);
        $sth->bindValue(':labelUrl', $this->_url);
        $sth->bindValue(':logo', $this->_logo);
        $sth->bindValue(':idCategory', $this->_idCategory);

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

        $sqlQuery = 'DELETE FROM `labels`
        WHERE `idLabel` = :id ;';

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':id', $id);

        return $sth->execute();
    }

}
