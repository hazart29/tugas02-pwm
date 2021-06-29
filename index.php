<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zartshrt link</title>
  <link rel="stylesheet" href="asset/css/bootstrap.css" type="text/css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- set favicon untuk website -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="manifest" href="manifest.json" crossorigin="use-credentials">
  <style type="text/css">
    @media (min-width: 768px) { /* breakpoint panjang layar untuk device pc/laptop */
      .navbar {                 /* mengatur panjang dan padding navbar */
        width: 100%;
        padding-left: 15%;
        padding-right: 15%;
      }

      .jumbotron {              /* mengatur panjang dan padding jumbotron */
        width: 100%;
        padding-top: 5%;
        padding-left: 15%;
        padding-right: 15%;
        padding-bottom: 5%;
      }
    }

    @media (max-width: 767px) { /* breakpoint device ipad/smartphone */
      .jumbotron { 
        width: 100%;
        padding-top: 5%;
        padding-left: 15%;
        padding-right: 15%;
        padding-bottom: 5%;
        font-size: xx-small;
        text-align: justify;
      }
      .navbar {
        font-size: smaller;
      }
    }
  </style>
</head>

<body class="bg-dark text-white">
  <!-- navbar header -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Zartshrt Link</a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <img src="asset/icons/arrow-clockwise.svg">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">
            <img src="asset/icons/info-square-fill.svg">
          </a>
        </li>
      </ul>
    </div>
    <div class="container-fluid"></div>
  </nav>
  
  <!-- body jumbotron -->
  <div>
    <div class="jumbotron jumbotron-fluid bg-dark text-white">
      <div class="container text-center">
        <h1 class="display-4">Wellcome to Zartshrt link</h1>
        <p class="lead my">Web apps yang memudahkan anda dalam meringkas url, hanya dengan satu klik masalah anda
          terselesaikan</p>
        <hr class="my-2 mb-4">
        <form action="" method="get">
          <div class="input-group mb-3">
            <input type="text" name="url" class="form-control my-2" placeholder="Paste your link here!" aria-label="Paste your link here!" aria-describedby="button-addon2">
            <div class="input-group-append">
              <input type="submit" class="btn btn-primary my-2" id="button-addon2" name="submit" value="Short Now!">
            </div>
        </form>
      </div>
      <!-- memanggil file result.php -->
      <?php
      include 'result.php'; 
      ?>
    </div>
  </div>

  <!-- navbar footer -->
  <div>
    <nav class="navbar navbar-dark bg-dark justify-content-center">
      <p class="text-white-50">Deploy by Misbakhul Munir using Cutt.ly API Service</p>
    </nav>
  </div>

</body>

<!-- inisiasi file konfifurasi javascript -->
<script type="text/javascript" src="asset\js\app.js"></script>
<script type="text/javascript" src="asset\popper\popper.js"></script>
<script type="text/javascript" src="asset\js\jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="asset\js\bootstrap.min.js"></script>

</html>
