<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <header class=" bg-success ps-3 p-3 bg-opacity-50 border-bottom">
    <h1>PHP</h1>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Start</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="dailyDate.php">Dagens Datum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="energyPrice.php">El-prismätare</a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Matematik
          </a>
          <!-- gör om detta med hjälp av loop -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addition.php">Addition</a></li>
            <li><a class="dropdown-item" href="division.php">Division</a></li>
            <li><a class="dropdown-item" href="multiplication.php">Multiplikation</a></li>
            <li><a class="dropdown-item" href="subtraction.php">Subtraktion</a></li>
          </ul>
        </li>
        </ul>
    </div>
  </div>
  </nav>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
