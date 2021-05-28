<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zartshrt link</title>
  <link rel="stylesheet" href="asset/css/bootstrap.css" type="text/css">
  <style type="text/css">
    @media (min-width: 768px) {
      .navbar {
        width: 100%;
        padding-left: 15%;
        padding-right: 15%;
      }

      .jumbotron {
        width: 100%;
        padding-top: 5%;
        padding-left: 15%;
        padding-right: 15%;
        padding-bottom: 5%;
      }
    }

    @media (max-width: 767px) {
      .jumbotron {
        width: 100%;
        padding-top: 5%;
        padding-left: 15%;
        padding-right: 15%;
        padding-bottom: 5%;
        font-size: xx-small;
        text-align: justify;
      }
    }
    
    @media (max-width: 480px){
        p {
            font-size: 14px;
        }
    }
  </style>
</head>

<?php
  $status = $_GET["status"];
  $fullLink = $_GET["fullLink"];
  $date = $_GET["date"];
  $shortLink = $_GET["shortLink"];
  $title = $_GET["title"];
?>

<body class="bg-dark text-white">
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" onclick="history.back()">
            <img src="asset/icon/arrow-left-square.svg">
          </a>
        </li>
        </ul>
      <a class="navbar-brand">
      </a>
    </div>
    </nav>

    <div>
    <div class="jumbotron jumbotron-fluid bg-dark text-white text-center">
      <p>Status : <?php echo $status; ?></p>
      <p>Full Link : <?php echo $fullLink; ?></p>
      <p>Date : <?php echo $date; ?></p>
      <p>Short Link : <?php echo $shortLink; ?></p>
      <p>Tittle: <?php echo $title; ?></p>
    </div>
    </div>

    <div>
    <nav class="navbar navbar-dark bg-dark justify-content-center">
      <p class="text-white-50">Deploy by Misbakhul Munir using Cutt.ly API Service</p>
    </nav>
  </div>
</body>
</html>