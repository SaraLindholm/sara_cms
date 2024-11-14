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
            <a class="nav-link" href="page1.php">Dagens Datum</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Matematik
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="page2.php">Multiplikation</a></li>
            <li><a class="dropdown-item" href="page3.php">Addition</a></li>
            <li><a class="dropdown-item" href="page4.php">Subtraktion</a></li>
            <li><a class="dropdown-item" href="page5.php">Division</a></li>
          </ul>
        </li>

        </ul>
    </div>
  </div>
  </nav>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
