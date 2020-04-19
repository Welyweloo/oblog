<?php
namespace oBlog\Controller;
use oBlog\Model\Article;


class MainController extends CoreController
{

    public function home()
    {
        $postModel = new Article(); // on créé une instance d'Article juste pour avoir accès à la méthode

        
        if(!isset($_GET['request'])) // gère la recherche lancée par un utilisateur si un $_GET['request'] existe 
        {
            if(!isset($_GET['view'])) // gère l'affichage des articles 3 par 3 avec un offset pour la pagination 
            {
                $param['limit'] = '3';
                $posts = $postModel->displayBoth($param); // récupère tous les articles, on passe en argument le nombre à associer à LIMIT pour limiter le nombre d'articles affichés
                $countPosts = count($posts);
                
                $this->show("home", [$posts, $countPosts]);
            }
            else 
            {
                if($_GET['view'] == '2')
                {
                    $param['offset'] = '3';
                }
                else if($_GET['view'] > '2')
                {
                    $param['offset'] = '3';
                    $viewPage = htmlspecialchars($_GET['view']);
                    $param['offset'] = (intval($viewPage)-1) * $param['offset']; //Calcul pour obtenir le bon offset (page - 1) * limit
                }

                $param['limit'] = '3';

                $posts = $postModel->displayBoth($param); // récupère tous les articles, on passe en argument les différents $param à utiliser pour le SELECT
                $countPosts = count($posts); // à utiliser pour vérifier si le nombre de post est inférieur à trois, sinon on ne montrera pas le bouton Suivant 

                $this->show("home", [$posts, $countPosts]);
            }

        }
        else 
        {
            $param['request'] = htmlspecialchars($_GET['request']);
            $posts = $postModel->displayBoth($param); // récupère tous les articles, on passe en argument le nombre à associer à LIMIT pour limiter le nombre d'articles affichés
            $countPosts = count($posts); 
            $this->show("home", [$posts, $countPosts]);
        }

    }

    public function legalNotices()
    {
        $this->show("legal-notices");
    }

    public function aboutUs()
    {
        $this->show("aboutus");
    }

    public function contact()
    {
        $this->show("contact");
    }

    public function sitemap()
    {
        $this->show("sitemap");
    }


}