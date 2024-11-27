<style> <?php include 'style.css'; ?> </style>
<?php
include 'helper.php';
sl_get_header();
?>
<div class="not-found-container">
  <div class="not-found-content">
    <h3>404: Sidan kunde inte hittas! Kanske har den gömts under en osynlighetsmantel, eller så försvann den genom en portnyckel. Leta vidare, trollstav redo!</h3>
    <div class="container mt-5">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Sök" aria-label="Sök">
      <button class="btn btn-outline-primary" type="submit">Sök</button>
    </form>
    <p><a href="index.php">Tillbaka till Start</a></p>
    <p><a href="nyheter.php">Ta mig till Nyheterna</a></p>
  </div>
  </div>
</div>
<?php sl_get_footer();
?>
