<footer>

<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
          Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
          ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
<div class="row justify-content-center text-center">
  <div class="col-6 social-networks">
    <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fa fa-github-square"></i></a></li>
    </ul>
  </div>
</div>

<!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
          Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
          ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
<div class="row justify-content-center text-center">
  <div class="col-9 links">
    <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
    <ul class="list-inline">
      <li class="list-inline-item"><a href="<?= $_SERVER['BASE_URI']; ?>/contact">Nous contacter</a></li>
      <li class="list-inline-item"><a href="<?= $_SERVER['BASE_URI']; ?>/aboutus">Qui sommes nous ?</a></li>
      <li class="list-inline-item"><a href="<?= $_SERVER['BASE_URI']; ?>/legal-notices">Mentions légales</a></li>
    </ul>
  </div>
</div>

</footer>

</div> <!-- /.container -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>
</body>

</html>