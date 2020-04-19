<?php

namespace oBlog\Controller;
use oBlog\Model\Category;
use oBlog\Model\Author;
/*
 * Cette classe me permet d'éviter la répétition de la méthode show() sur les autres controlleurs.
 * La méthode show prend en argument le nom du template à afficher, et un tableau $data qui permettra de récupérer les données de la BDD sous forme d'objet
 * Les classes Author et Category y sont instanciées afin de pouvoir gérer les affichages du header et de la sidebar
 */
abstract class CoreController 
{

    protected function show($templateName, $datas = [])
    {
        $categoryModel = new Category(); 
        $categories = $categoryModel->displayAll();

        $authorModel = new Author(); 
        $authors = $authorModel->displayAll();

        require("../app/views/header.tpl.php");
        require("../app/views/$templateName.tpl.php");
        require("../app/views/sidebar.tpl.php");
        require("../app/views/footer.tpl.php");

    }


    protected function error() 
    /*
    * Cette méthode permet de gérer les erreurs 404. Si l'url est erronée ou si une catégorie, un auteur ou un article
    * n'existe pas une pop up permettra à l'utilisateur d'aller sur la page plan du site ou de revenir sur la dernière page
    */
    {
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


}