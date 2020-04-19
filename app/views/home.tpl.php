<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9 pt-3">

      <h1 class="card-title">Bonjour, voici les derniers articles</h1>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <?php 
          foreach($datas[0] as $article):
        ?>
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="<?= $_SERVER['BASE_URI']; ?>/post/<?= $article->getId(); ?>"><?= $article->getTitle(); ?></a></h2>
            <p class="card-text"><?= $article->getResume(); ?></p>
            <p class="infos">
              Posté par <a href="<?= $_SERVER['BASE_URI']; ?>/author/<?= $article->getAuthor_id(); ?>" class="card-link"><?= $article->getAuthor_name(); ?></a> le <time datetime="<?= $article->getDate('datetime'); ?>"><?= $article->getDate('fr'); ?></time> dans <a href="<?= $_SERVER['BASE_URI']; ?>/category/<?= $article->getCategory_id(); ?>"
                class="card-link"><?= $article->getCategory_name(); ?></a>
            </p>
          </div>
        </article>
        <?php 
          endforeach;
        ?>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">

            <?php
            /**
             * Le code (ligne à ) permet de gérer le lien vers lequel sera dirigé l'utilisateur quand il clique sur précédent ou suivant
             * S'il y a un $_GET['view'] on fait un calcul à partir de la page actuelle sinon on ne peut pas faire précédent
             * Si on est sur la page 2 et qu'il y a plus de 2 articles dans $countPost (nombre de posts renvoyés par la requête) -> on passe à la page suivante
             * Sinon on reste sur la présente page
             */
            $pageNumber = 0;
              if(isset($_GET['view']) && (int)$_GET['view'] >= 2){
                $pageNumber = intval($_GET['view']) - 1;
            ?> 
            <li class="page-item">
              <a class="page-link" href="<?= $_SERVER['BASE_URI']; ?>/?view=<?= $pageNumber ?>"><i class="fa fa-arrow-left"></i>
                Précédent
              </a>
            </li>
            <?php    
            }
            else
            {
            ?>
            <li class="page-item">
              <a class="page-link" href="<?= $_SERVER['BASE_URI']; ?>/"><i class="fa fa-arrow-left"></i>
                Précédent
              </a>
            </li>

            <?php
              }; 
            ?>
            <?php
            $pageNumber = 0;
              if (isset($_GET['view']) && (int)$_GET['view'] >= 2 && (int)$datas[1] > 2) {
                  $pageNumber = intval($_GET['view']);
                  $pageNumber += 1;
            ?>
            <li class="page-item">
              <a class="page-link" href="<?= $_SERVER['BASE_URI']; ?>/?view=<?= $pageNumber ?>">Suivant<i class="fa fa-arrow-right"></i>

              </a>
            </li>
            <?php
              }
              else if(isset($_GET['view']) && (int)$datas[1] < 3 && (int)$datas[1] > 0)
              {
            ?>
            <li class="page-item">
              <a class="page-link" href="<?= $_SERVER['BASE_URI']; ?>/?view=<?= $_GET['view'] ?>">Suivant<i class="fa fa-arrow-right"></i>
                
              </a>
            </li>

            <?php
              }
              else 
              {
            ?>
            <li class="page-item">
              <a class="page-link" href="<?= $_SERVER['BASE_URI']; ?>/?view=2">Suivant&nbsp;<i class="fa fa-arrow-right"></i>
                
              </a>
            </li>

            <?php
              }
            ?>
          </ul>
        </nav>

      </main>


