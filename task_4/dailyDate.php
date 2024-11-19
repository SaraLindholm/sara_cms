<?php include 'helper.php';
$timestamp = sl_timeStamp_from_date($_POST['date'] ?? null);

// Hämta dagens veckodag (t.ex. Måndag, Tisdag)
$day = date('l', $timestamp);

// Hämta dagens datum i formatet dag månad
$day = date('j F', $timestamp);

$evenOrOddDate = date('j', $timestamp) % 2 != 0;
//hjälp-funktion för att upptäcka errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
  <?php sl_get_header(); ?>
  <div class="container justify-content-center mt-5">
    <div class="col-md-6">
        <h3>Dagens datum</h3>
        <?php echo "<p> Idag är det $day, vilket är ett " .
            ($evenOrOddDate ? 'udda' : 'jämnt') .
            ' datum.</p>'; ?>
    </div>
    <form action="dailyDate.php" method="post">
      <div class="mb-3 col-md-2">
        <label for="date" class="form-label mt-4">Välj ett datum:</label>
          <input type="date" class="form-control" id="date" name="date">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
<?php sl_get_footer(); ?>
