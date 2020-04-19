<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title">Site Map (en cours de construction)</h2>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/">Home</a></strong></p>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/categories">Catégories</a></strong></p>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/authors">Auteurs</a></strong></p>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/posts">Articles</a></strong></p>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/contact">Nous Contacter</a></strong></p>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/aboutus">Nous Connaître</a></strong></p>
            <p class="card-text"><strong><a href="<?= $_SERVER['BASE_URI']; ?>/legal-notices">Mentions Légales</a></strong></p>
          </div>
        </article>
      </main>


