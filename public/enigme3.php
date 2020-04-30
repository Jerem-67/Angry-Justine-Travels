<?php
require_once './class/WindyApi.php';
@session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--image de chargement-->
  <?php
if($_SERVER['REQUEST_URI'] == '/enigme3.php'){
    echo '<div id="sofa"><img src="./image/32ml9m.gif"> </div>';
    echo '<script type="text/javascript" src="./script/timeout.js"></script>';
}
?>
<div class="JK-content">
    <form method="GET" action="#">

        <fieldset>
        <h2>Enigme 3 :</h2>
        <div>
            <p>Dans quelle région du monde se trouve cette webcam ?</p>
        </div>
        <div class="container">
            <?php
            require_once './class/WindyApi.php';
            @$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
            $camLoc = $cam->getCamLocation(1477556870);

            echo $camLoc;
            ?>
            <div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Indice
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Le père noël y habite
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="rep">
            <div class="interieur">
                <div>
                    <input type="submit" value="Russie" class="btn" name="rep1">
                </div>
                <div>
                    <input type="submit" value="Alaska" class="btn" name="rep2">
                </div>
            </div>
                <div class="interieur">
                    <div>
                        <input type="submit" value="Groenland" class="btn" name="rep3">
                    </div>
                    <div>
                        <input type="submit" value="Laponie" class="btn" name="rep4">
                    </div>
                </div>
                </div>
            </div>
            <div class="reponse">
                <?php
                $tentative = $_SESSION['tentative'];
                if (!empty($_GET["rep4"])) {
                    $tentative += 1;
                    echo "<p>BRAVO ! Angry Justine a trouvé sa trousse à maquillage ;) </p>";
                    echo "<div class=\"rep-img\"><img class=\"icon\" src='image/mascara.png'><a class='next' href='enigme4.php'>Next !</a></div>";
                } elseif (!empty($_GET["rep1"])) {
                    $tentative += 1;
                    echo "Loupé ! Quel dommage...";
                } elseif (!empty($_GET["rep2"])) {
                    $tentative += 1;
                    echo "Loupé ! Quel dommage...";
                } elseif (!empty($_GET["rep3"])) {
                    $tentative += 1;
                    echo "Loupé ! Quel dommage...";
                }
                $_SESSION['tentative'] = $tentative;
                ?>
            </div>

        </fieldset>

    </form>
    <div class="img">
        <img class="avatar" src="image/Avatar3.png">
        <div class="icons">
            <img class="icon" src='image/food_1.png'>
            <img class="icon" src='image/clothes.png'>
        </div>
        <div class="score">
            <?php
            echo "<p class='tentative'> Nombre de tentatives : " . $_SESSION['tentative'];
            ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
