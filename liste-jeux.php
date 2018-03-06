<?php include_once('includes/header.html');
include_once('includes/variables.php');
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Liste jeux</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>

      <!-- Page Features -->
        <table id="liste-jeux" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $compteur_jeu = 1;
            foreach($tableau_jeux as $jeu){
                  echo '<tr>';
                  echo '<td>'.$compteur_jeu.'</td>';
                  echo '<td>'.$jeu['prenom'].'</td>';
                  echo '<td>'.$jeu['nom'].'</td>';
                  echo '<td>'.$jeu['handle'].'</td>';
                  echo '</tr>';
                  $compteur_jeu++;
            } ?>
          </tbody>
        </table>

    </div>
    <!-- /.container -->

<?php include_once('includes/footer.html'); ?>
