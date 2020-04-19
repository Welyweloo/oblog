<?php

namespace oBlog\Model;
use oBlog\Database;
use PDO;

class Author
{
    private $id;
    private $name;
    private $image;
    private $email;

    public function displayAll()
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT * FROM authors ORDER BY `name` ";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $authors = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $authors;
    }

    public function displayAuthor($id)
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT * FROM authors WHERE id = $id";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $authors = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $authors;
    }


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}