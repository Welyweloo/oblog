<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <?php
            $article = $datas;
        ?>
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><?= $article->getTitle(); ?></h2>
            <p class="card-text text-justify"><?= $article->getContent(); ?></p>
            <p class="infos">
              Posté par <a href="<?= $_SERVER['BASE_URI']; ?>/author/<?= $article->getAuthor_id(); ?>" class="card-link"><?= $article->getAuthor_name(); ?></a> le <time datetime="<?= $article->getDate('datetime'); ?>"><?= $article->getDate('fr'); ?></time> dans <a href="<?= $_SERVER['BASE_URI']; ?>/category/<?= $article->getCategory_id(); ?>"
                class="card-link"><?= $article->getCategory_name(); ?></a>
            </p>
          </div>
        </article>

</main>