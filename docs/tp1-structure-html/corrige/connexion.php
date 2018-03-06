<?php include_once('includes/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Connexion</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <form class="form-signin">
          <h1 class="h3 mb-3 font-weight-normal">Merci de vous connecter</h1>
          <label for="inputEmail" class="sr-only">Identifiant</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Mot de passe</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include_once('includes/footer.html'); ?>
