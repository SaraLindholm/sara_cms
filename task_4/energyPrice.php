<?php include 'helper.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$price = isset($_POST['price']) ? $_POST['price'] : '';
$consumption = isset($_POST['consumption']) ? $_POST['consumption'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>elpris</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<?php sl_get_header(); ?>
<body class="bg-success p-2 bg-opacity-50">
 <form action="energyPrice.php" method="post">
    <div class="mb-3 col-md-3 ">
      <label for="price" class="form-label">Aktuellt elpris (kr/KwH)</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="kr/KwH">
      <label for="consumption" class="form-label">Aktuell förbrukning (KwH)</label>
        <input type="number" class="form-control" name="consumption" id="consumption" placeholder="kwH">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Beräkna</button>
  </form>
  <?php if ($price !== '' && $consumption !== '') {
      sl_elPrice_consumption($price, $consumption);
  } else {
      echo 'Ett eller fler fält lämnades tomma';
  } ?>
  <hr>
  <?php var_dump($_POST);
// För att kolla vad som skickas med formuläret
?>
<?php sl_get_footer(); ?>
###Undersida 3 (ny undersida för denna uppgift)
På denna undersida ska en kalkylator för elpris skapas. Börja med att skapa ett formulär med
inmatningsfälten:

“Aktuellt elpris (kr/KwH)” samt

“Aktuell förbrukning (KwH)”.

När användaren
bekräftar formuläret ska elpriset beräknas och värdet rundas av så att det visas med lämplig
formatering och valuta.

Exempelvis: “Det beräknade elpriset blir 920 kronor”. Designa sidan så att
formulär och utskrift blir användarvänlig.
Symbolisera gärna motsvarande hur många hästar som behöver jobba hur många timmar för samma wH.
