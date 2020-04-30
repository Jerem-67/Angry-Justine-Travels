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
    <img src="image/Avatar2.png">
</div>
<form method="GET" action="#">

    <fieldset>

        <h2>Enigme 2 :</h2>
        <div>
            <p>Dans quelle ville se trouve cette place ?</p>
        </div>
        <div class="container">
            <?php
            require_once './class/WindyApi.php';
            @$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
            $camLoc = $cam->getCamLocation(1230041254);

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
                                Le pape y habite
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="rep">
            <div class="interieur">
                <div>
                    <input type="submit" value="Rome" class="btn" name="rep1">
                </div>
                <div>
                    <input type="submit" value="Paris" class="btn" name="rep2">
                </div>
            </div>


            <div class="interieur">
                <div>
                    <input type="submit" value="Berlin" class="btn" name="rep3">
                </div>
                <div>
                    <input type="submit" value="Dacca" class="btn" name="rep4">
                </div>
            </div>
        </div>
        <div class="reponse">
            <?php
            $tentative = 0;
            if (!empty($_GET["rep1"])) {
                $tentative += 1;
                echo "<p>BRAVO ! Angry Justine a trouvé ses vetements :p </p>";
                echo "<a class='next' href='enigme3.php'><img src='image/clothes.png'> Next !</a>";
            } elseif (!empty($_GET["rep3"])) {
                echo "Loupé ! Quel dommage...";
            } elseif (!empty($_GET["rep2"])) {
                echo "Loupé ! Quel dommage...";
            } elseif (!empty($_GET["rep4"])) {
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

