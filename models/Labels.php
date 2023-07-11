<?php

require_once __DIR__ . '/../helpers/connect.php';

class Labels
{
    private int $_idLabel;
    private string $_label;
    private ?int $_visibility = null;
    private ?string $_url = null;
    private ?string $_logo = null;
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

    // ******************** Visibility ******************** //

    /**
     * @param int $visibility
     * 
     * @return void
     */
    public function setVisibility(int $visibility): void
    {
        $this->_visibility = $visibility;
    }
    /**
     * @return int
     */
    public function getVisibility(): int
    {
        return $this->_visibility;
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
        $db = Database::getInstance();
        // Ecriture de la requête
        $sqlQuery = "INSERT INTO `labels` (`label`,`url`,`logo`,`idCategory`, visibility)
        VALUES (:label, :labelUrl, :logo, :idCategory, :visibility);";
        // Préparation sth
        $sth = $db->prepare($sqlQuery);
        $sth->bindValue(':label', $this->_label);
        $sth->bindValue(':labelUrl', $this->_url ?? null);
        $sth->bindValue(':logo', $this->_logo ?? null);
        $sth->bindValue(':idCategory', $this->_idCategory, PDO::PARAM_INT);
        $sth->bindValue(':visibility', $this->_visibility, PDO::PARAM_INT);


        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }

    // ******************** Get ALL ******************** //
    /**
     * @return mixed
     */
    public static function getAll(): array|false
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

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        $sth->execute();

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
                    `logo`=:logo,
                    `idCategory`=:idCategory,
                    `visibility`=:visibility
                    WHERE `idLog`= :id ;'";

        $sth = $db->prepare($sqlQuery);

        $sth->bindValue(':label', $this->_label);
        $sth->bindValue(':labelUrl', $this->_url);
        $sth->bindValue(':logo', $this->_logo);
        $sth->bindValue(':idCategory', $this->_idCategory, PDO::PARAM_INT);
        $sth->bindValue(':visibility', $this->_visibility, PDO::PARAM_INT);

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

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

        $sth->bindValue(':id', $id, PDO::PARAM_INT);

        return $sth->execute();
    }
}
