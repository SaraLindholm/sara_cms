<style> <?php include 'style.css'; ?> </style>
<?php
include 'helper.php';
sl_get_header();
?>
<div class="contact-container">
  <div class="contact-content">
    <h3>Vill du komma i kontakt med oss?</h3>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Namn</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">Meddelande</label>
          <textarea class="form-control" id="message" rows="5"></textarea>
        </div>
    <button type="submit" class="button btn-primary">Submit</button>
  </form>

  </div>
</div>
<?php sl_get_footer();
?>
