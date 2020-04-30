<?php
require_once 'class/WindyApi.php';
$_SESSION['tentative'] = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">

    <title>Angry Justine Travels</title>
</head>
<body>
<h1>Angry Justine's Travel !</h1>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <div class="slid">
                <img src="image/image1.jpg" class="image w-100" alt="...">
                <h5>Voyage avec Angry Justine !</h5>
                <div>
                    <p>Aujourd'hui, Angry Justine doit faire sa rentrée à la <span id="codeschool">Wild Code School</span> de Strasbourg.</p>
                    <p>Seulement, un imprévu va compliquer sa journée...</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image2.jpg" class="image w-100" alt="...">
                <h5>Angry Justine se réveille</h5>
                <div>
                    <p>Jamais très fraîche sans son cafée,</p>
                    <p>c'est avec une démarche de zombi qu'elle se dirige vers la cuisine</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image3.jpg" class="image w-100" alt="...">
                <h5>Angry Justine est rêveuse</h5>
                <div>
                    <p>Elle imagine sa journée parfaite,</p>
                    <p>dans sa tenue parfaite, parfaitement coiffée et maquillée, mais d'abord un CAFE !</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image4.jpg" class="image w-100" alt="...">
                <h5>HORREUR !</h5>
                <div>
                    <p>Malédiction ! Plus une goute de café !</p>
                    <p>La tenue qu'elle avait préparé la veille, envolée !</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image5.jpg" class="image w-100" alt="...">
                <h5>Angry Justine est désespérée</h5>
                <div>
                    <p>Comment réussir sa journée sans café ?!</p>
                    <p>Et sans vêtements ? Sans maquillage ?! </p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image6.jpg" class="image w-100" alt="...">
                <h5>Angry Justine est en colère ! </h5>
                <div>
                    <p>Ce doit être un coup de David !</p>
                    <p>Bingo ! Sur la table, un petit mot, sur lequel est noté ... des énigmes ?</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image8.jpg" class="image w-100" alt="...">
                <h5>Angry Justine ne peut pas y arriver seule</h5>
                <div>
                    <p>Elle a besoin de toi !</p>
                    <p>Il reste peu de temps avant les cours et beaucoup de choses à trouver !</p>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="10000">
            <div class="slid">
                <img src="image/image7.jpg" class="image w-100" alt="...">
                <h5>En route pour la première étape !</h5>
                <div>
                    <p>Ni une, ni deux, Angry Justine saute sur son canapé magique</p>
                    <a href="enigme1.php">Rejoindre Angry Justine sur son canapé pour l'aider dans son aventure</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>