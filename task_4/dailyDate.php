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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-success p-2 bg-opacity-50">
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
