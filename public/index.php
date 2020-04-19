<?php 

require('../vendor/autoload.php'); //pour rendre disponible le symfony/var_dumper, l'altorouter et l'autoload
require('../app/models/Category.php');
require('../app/models/Author.php');
require('../app/models/Article.php');
require('../app/controllers/CoreController.php');
require('../app/controllers/MainController.php');
require('../app/controllers/DisplayController.php');

$router = new AltoRouter();



//demande à AltoRouter d'ignorer les sous-dossiers présents dans l'URL
//*https://altorouter.com/usage/rewrite-requests.html 
$router->setBasePath($_SERVER['BASE_URI']);

//réalisation des routes 
//*https://altorouter.com/usage/mapping-routes.html
$router->map("GET", "/", ["MainController", "home"], "home-route"); // home
$router->map("GET", "/post/[i:id]", ["DisplayController", "showPost"], "post-route"); // post
$router->map("GET", "/author/[i:id]", ["DisplayController", "showAuthorPosts"], "author-route"); // author
$router->map("GET", "/category/[i:id]", ["DisplayController", "showCategoryPosts"], "category-route"); // category
$router->map("GET", "/legal-notices", ["MainController", "legalNotices"], "legal-notices-route"); // legal notices
$router->map("GET", "/contact", ["MainController", "contact"], "contact-route"); // contact
$router->map("GET", "/aboutus", ["MainController", "aboutUs"], "abousus-route"); // contact
$router->map("GET", "/sitemap", ["MainController", "sitemap"], "sitemap-route"); // sitemap

$match = $router->match(); // on demande à altorouter de comparer maintenant l'URL de la requête avec nos routes

if($match === false)
{ // Cette fonction est expliquée dans le CoreController
    ?>
    <script language="javascript">
    confirm = confirm('Attention, la page souhaitée n\'existe pas, souhaitez-vous voir le plan du site?');
    if(confirm == true)
    {
        window.location.href = "http://127.0.0.1:8080/Revisions/S05-atelier-revisions-oblog-mvc/public/sitemap";
    } 
    else 
    {
        history.back();
    }
  </script> 
  <?php
} 
else 
{
    $controllerToUse = "oBlog\Controller\\".$match["target"][0];
    $methodToCall = $match["target"][1];

    $controller = new $controllerToUse();
    $controller->$methodToCall( $match["params"] );

}