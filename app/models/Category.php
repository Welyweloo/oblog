<?php

namespace oBlog\Model;
use oBlog\Database;
use PDO;

class Category
{
    private $id;
    private $name;
    private $position;

    public function displayAll()
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT * FROM categories ORDER BY position ";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $categories = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $categories;
    }

    public function displayCategory($id)
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT * FROM categories WHERE id = $id";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $categories = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $categories;
    }


    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}