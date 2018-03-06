<?php include_once('includes/header.php'); ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $nom_contact;?></h1>
        <p class="lead"><?php echo $texte_contact;?></p>
        <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription;?></a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <form class="contact">
          <div class="form-group">
            <label for="exampleFormControlInput1"><?php echo $adresse_email;?></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"><?php echo $exemple_select;?></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2"><?php echo $exemple_multiple_select;?></label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><?php echo $exemple_textarea;?></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mb-2"><?php echo $submit_button; ?></button>

        </form>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
