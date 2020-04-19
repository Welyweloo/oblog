<?php 
namespace oBlog\Controller;
use oBlog\Model\Article;
use oBlog\Model\Author;
use oBlog\Model\Category;

class DisplayController extends CoreController
{

    public function showPost($params = [])
    {
        $postModel = new Article(); // on créé une instance de Article juste pour avoir accès à la méthode
        $posts = $postModel->displayPostWithId($params['id']); // récupère tous les articles
        if ($posts) {
            $this->show("article", $posts);
        }
        else 
        {
            $this->error();
        }
    }

    public function showAuthorPosts($params = [])
    {
        $postModel = new Article(); 
        $posts = $postModel->displayByAuthors($params['id']);
        
        $authorModel = new Author();
        $authors = $authorModel->displayAuthor($params['id']);
        
        if ($posts) {
            $this->show("author", [$authors[0]->getName(), $posts]);
        }
        else 
        {
            $this->error();
        }
    }

    public function showCategoryPosts($params = [])
    {
        $postModel = new Article(); 
        $posts = $postModel->displayByCategories($params['id']);
     
        $categoryModel = new Category();
        $categories = $categoryModel->displayCategory($params['id']);

        if ($posts) {
            $this->show("category", [$categories[0]->getName(), $posts]);
        }
        else 
        {
            $this->error();
        }
        
    }


}