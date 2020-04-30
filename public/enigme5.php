<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="img">
    <img src="image/Avatar6.png">
</div>
<form method="GET" action="#">

    <fieldset>

        <h2>Enigme 5 :</h2>
        <div>
            <p>Spécialité dessert du pays ?</p>
        </div>
        <div class="container">
            <?php
            require_once './class/WindyApi.php';
            @$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
            $camLoc = $cam->getCamLocation(1570401195);

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
                                Portugal
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="rep">
            <div class="interieur">
                <div>
                    <input type="submit" value="Flan" class="btn" name="rep1">
                </div>
                <div>
                    <input type="submit" value="Pasteis de Nata" class="btn" name="rep2">
                </div>
            </div>


            <div class="interieur">
                <div>
                    <input type="submit" value="Mousse au chocolat" class="btn" name="rep3">
                </div>
                <div>
                    <input type="submit" value="Macaron" class="btn" name="rep4">
                </div>
            </div>
        </div>
        <div class="reponse">
            <?php
            $tentative = 0;
            if (!empty($_GET["rep2"])) {
                $tentative += 1;
                echo "<p>BRAVO ! Angry Justine a trouvé son gateau préféré <3 </p>";
                echo "<a class='next' href='enigme6.php'><img src='image/food.png'> Next !</a>";
            } elseif (!empty($_GET["rep1"])) {
                echo "Loupé ! Quel dommage...";
            } elseif (!empty($_GET["rep2"])) {
                echo "Loupé ! Quel dommage...";
            } elseif (!empty($_GET["rep3"])) {
                echo "Loupé ! Quel dommage...";
            }

            ?>
        </div>

    </fieldset>

</form>

<div class="score">
    <?php
    echo "<p class='tentative'> Nombres de tentatives : " . $tentative;
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
