<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zartshrt link</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css" type="text/css">
    <style type="text/css">
        .card-img {
            /* css untuk mengatur class card-img */
            width: 100%;
            height: 300px;
            background-image: url("asset/images/me.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (min-width: 768px) {
            .navbar {
                width: 100%;
                padding-left: 15%;
                padding-right: 15%;
            }

            .card-img{
                background-position: center;
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

            .navbar {
                font-size: smaller;
            }
        }
    </style>
</head>

<body class="bg-dark text-white">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <!-- kembali ke halaman sebelumnya tanpa melakukan refresh halaman -->
                    <a class="nav-link" onclick="history.back()">
                        <img src="asset/icons/arrow-left-square.svg">
                    </a>
                </li>
            </ul>
            <a class="navbar-brand">
            </a>
        </div>
    </nav>

    <div>
        <div class="jumbotron jumbotron-fluid bg-dark text-white py-4">
            <!-- memakai component card untuk membuat profile card -->
            <div class="card w-100 bg-dark border-0" style="width: 18rem;">
                <div class="card-body text-center">
                    <p class="card-img"></p>
                    <h5 class="card-title">Misbakhul Munir</h5>
                    <p class="card-text">"Hidup dijalani saja, bahagia atau tidaknya kita yang menetukan, bukan orang lain!."</p>
                </div>
                <div class="card-body bg-dark border-0 text-center">
                    <a href="https://www.instagram.com/misbakhul29_/" class="card-link">Instagram</a>
                    <a href="https://web.facebook.com/Misbakhul29" class="card-link">Facebook</a>
                    <a href="https://cutt.ly/" class="card-link">Cutt.ly</a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <nav class="navbar navbar-dark bg-dark justify-content-center">
            <p class="text-white-50">Deploy by Misbakhul Munir using Cutt.ly API Service</p>
        </nav>
    </div>

</body>

<script type="text/javascript" src="asset\popper\popper.js"></script>
<script type="text/javascript" src="asset\js\jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="asset\js\bootstrap.min.js"></script>

</html>