<?php

namespace oBlog\Model;
use oBlog\Database;
use PDO;

class Article 
{
    private $id;
    private $title;
    private $resume;
    private $content;
    private $published_date;
    private $views;
    private $author_id;
    private $category_id;

    public function displayBoth($param = ['limit' => '', 'request' => '', 'offset' => '']) //les paramètres permettent de gérer l'affichage avec limit, where et offset
    {
        $limit = '';
        $request = '';
        $offset = '';

        if(array_key_exists('limit', $param))
        {
            $limit =  " LIMIT {$param['limit']} ";
        }
        if(array_key_exists('request', $param))
        {
            $request = " WHERE articles.title LIKE '%{$param['request']}%' OR articles.content LIKE '%{$param['request']}%' ";
        }
        if(array_key_exists('offset', $param))
        {
            $offset = " OFFSET {$param['offset']}";
        }
        
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT articles.id, articles.title, articles.resume, articles.published_date,  articles.author_id, authors.name AS author_name, articles.category_id, categories.name AS category_name
        FROM articles
        JOIN authors
        ON articles.author_id = authors.id
        JOIN categories 
        ON articles.category_id = categories.id
        $request
        ORDER BY  articles.published_date DESC
        $limit $offset";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $posts = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $posts;
    }

/**FONCTION DISPLAYBOTH() SCINDEE EN DEUX
    public function displayHome($limit = '')
    {
        
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT articles.id, articles.title, articles.resume, articles.published_date,  articles.author_id, authors.name AS author_name, articles.category_id, categories.name AS category_name
        FROM articles
        JOIN authors
        ON articles.author_id = authors.id
        JOIN categories 
        ON articles.category_id = categories.id
        ORDER BY  articles.published_date DESC
        LIMIT $limit";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $posts = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $posts;
    }

    public function displayHomeSearch($request = '')
    {
        
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT articles.id, articles.title, articles.resume, articles.published_date,  articles.author_id, authors.name AS author_name, articles.category_id, categories.name AS category_name
        FROM articles
        JOIN authors
        ON articles.author_id = authors.id
        JOIN categories 
        ON articles.category_id = categories.id
        WHERE articles.title LIKE '%$request%' OR articles.content LIKE '%$request%'
        ORDER BY  articles.published_date DESC";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $posts = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $posts;
    }
*/

    public function displayPostWithId($id)
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT articles.id, articles.title, articles.resume, articles.content, articles.published_date,  articles.author_id, authors.name AS author_name, articles.category_id, categories.name AS category_name
        FROM articles
        JOIN authors
        ON articles.author_id = authors.id
        JOIN categories 
        ON articles.category_id = categories.id
        WHERE articles.id = $id
        ORDER BY  articles.published_date DESC";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $post = $statement->fetchObject(__CLASS__);
        return $post; 
    }

    public function displayByAuthors($authorId)
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT articles.id, articles.title, articles.resume, articles.published_date,  articles.author_id, authors.name AS author_name, articles.category_id, categories.name AS category_name
        FROM articles
        JOIN authors
        ON articles.author_id = authors.id
        JOIN categories 
        ON articles.category_id = categories.id
        WHERE authors.id = $authorId
        ORDER BY  articles.published_date DESC";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $articles = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $articles;  
    }

    public function displayByCategories($categoryId)
    {
        //*requête SQL préparée sur requetes.sql
        $sql = "SELECT articles.id, articles.title, articles.resume, articles.published_date,  articles.author_id, authors.name AS author_name, articles.category_id, categories.name AS category_name
        FROM articles
        JOIN authors
        ON articles.author_id = authors.id
        JOIN categories 
        ON articles.category_id = categories.id
        WHERE articles.category_id = $categoryId
        ORDER BY  articles.published_date DESC";

        $pdo = Database::getPDO(); // récupère notre connexion à la bdd
        $statement = $pdo->query($sql); // exécute la requête sur le serveur mysql

        // récupère les données du serveur mysql, va nous créer une instance de notre classe pour chaque ligne de résultat
        $articles = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $articles;    
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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of published_date
     */ 
    public function getPublished_date()
    {
        return $this->published_date;
    }

    /**
     * Set the value of published_date
     *
     * @return  self
     */ 
    public function setPublished_date($published_date)
    {
        $this->published_date = $published_date;

        return $this;
    }


      /**
       * Cette méthode convertit un code de lang en un format d'affichage, et retourne la date stockée sous la forme d'un timestamp, dans ce format d'affichage.
       */
      public function getDate($langCode) {
        if ($langCode == 'fr') {
          return date('d/m/Y', strtotime($this->published_date));
        } elseif ($langCode == 'en') {
          // return date('Y-jS-m', $this->date);
          return date('Y-m-d', strtotime($this->published_date));
        } elseif ($langCode == 'datetime') {
          return date('c', strtotime($this->published_date));
        } else {
          return date('Y-m-d', strtotime($this->published_date));
        }
      }

    /**
     * Get the value of views
     */ 
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */ 
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of author_id
     */ 
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Set the value of author_id
     *
     * @return  self
     */ 
    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getAuthor_name()
    {
        return $this->author_name;
    }

    public function getCategory_name()
    {
        return $this->category_name;
    }
}
