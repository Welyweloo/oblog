<aside class="col-lg-3">
        <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
        <div class="input-group mb-3">
        <form class="input-group mb-3" action="<?= $_SERVER['BASE_URI']; ?>/" method="GET">
            <input type="text" class="form-control" placeholder="Rechercher un article..."
              aria-label="Rechercher un article..." aria-describedby="basic-addon2" name="request">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Allez</button>
            </div>
          </form>    
        </div>

        <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
        <div class="card">
          <h3 class="card-header">Catégories</h3>
        <ul class="list-group list-group-flush">
          <?php 
          foreach($categories as $category):
          ?>
          <li class="list-group-item">
            <a class="list-group-item" href="<?= $_SERVER['BASE_URI']; ?>/category/<?= $category->getId(); ?>"><?= $category->getName() ?></a>
          </li>
          <?php
          endforeach;
          ?>
        </ul>
        </div>

        <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
        <div class="card">
          <h3 class="card-header">Auteurs</h3>
          <ul class="list-group list-group-flush">
          <?php 
          foreach($authors as $author):
          ?>
          <li class="list-group-item">
            <a class="list-group-item" href="<?= $_SERVER['BASE_URI']; ?>/author/<?= $author->getId(); ?>"><?= $author->getName() ?></a>
          </li>
          <?php
          endforeach;
          ?>
        </ul>
        </div>

      </aside>
      </div><!-- /.row -->