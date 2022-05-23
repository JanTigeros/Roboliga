<!DOCTYPE html>
<?php
require("db.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">ROBOLIGA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Domov</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">Novice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rules.php">Pravila</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">O Nas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="competition.php">Tekmovanje</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <nav class="phone-nav" role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li><a href="index.php">Domov</a></li>
                <li><a href="news.php">Novice</a></li>
                <li><a href="rules.php">Pravila</a></li>
                <li><a href="about.php">O Nas</a></li>
                <li><a href="competition.php">Tekmovanje</a></li>
            </ul>
        </div>
    </nav>
</div>
</body>
</html>