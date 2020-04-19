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
            <h2 class="card-title"><a href="article.html">Nous Contacter</a></h2>
            <p class="card-text"><strong>Email:</strong> 09.74.76.80.67 </p>
            <p class="card-text"><strong>Téléphone:</strong> hey@oclock.io</p>
            <p class="card-text"><strong>Twitter</strong> @Oclock_io</p>
          </div>
        </article>
      </main>


