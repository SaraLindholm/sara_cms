<?php include 'helper.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
?>
<?php sl_get_header(); ?>
  <div class="container d-flex mt-5">
    <div class="mx-auto">
    <?php sl_greeting($name); ?>
      <!-- <h4>Dagens trevliga hälsning</h4><br> -->
      <form action="index.php" method="post">
        <div class="mb-5 mt-5 col-6">
        <label for="name" class="form-label">Ange:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Ditt namn">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </form>
    </div>
  </div>
<?php sl_get_footer(); ?>
