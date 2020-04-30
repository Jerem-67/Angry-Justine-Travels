<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form method="GET" action="#">

    <fieldset>

        <h2>Enigme 2 :</h2>
        <!--        <div class="container">-->
        <!--            --><?php
        //            @$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
        //            $camLoc = $cam->getCamLocation(1549489452);
        //
        //            echo $camLoc;
        //
        //            ?>
        <!--        </div>-->
        <div>
            <p class="indice">Indices</p>
        </div>
        <div class="rep">
            <div class="interieur">
                <div>
                    <input type="submit" value="Pont de Brooklyn" class="btn" name="rep1">
                </div>
                <div>
                    <input type="submit" value="Pont de Tatara" class="btn" name="rep2">
                </div>
            </div>


            <div class="interieur">
                <div>
                    <input type="submit" value="Justine" class="btn" name="rep3">
                </div>
                <div>
                    <input type="submit" value="David" class="btn" name="rep4">
                </div>
            </div>
        </div>
        <div class="reponse">
            <?php
            $tentative = 0;
            if (!empty($_GET["rep1"])) {
                $tentative += 1;
                echo "<p>BRAVO ! Angry Justine a trouvé ses vetements :p </p>";
                echo "<a class='next' href='enigme3.php'>Next !</a>";
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

<div>
    <?php

    echo "<p class='tentative'> Nombres de tentatives : " . $tentative;
    ?>
    <img src="">
</div>
</body>

