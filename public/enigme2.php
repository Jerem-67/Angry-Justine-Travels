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
    <img class="avatar" src="image/Avatar2.png">
    <div class="icons">
        <img class="icon" src='image/food_1.png'>
    </div>
    <div class="score">
        <?php
        echo "<p class='tentative'> Nombres de tentatives : " . $_SESSION['tentative'];
        ?>
    </div>

</div>
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
            $tentative = $_SESSION['tentative'];
            if (!empty($_GET["rep1"])) {
                $tentative += 1;
                echo "<p>BRAVO ! Angry Justine a trouvé sa tasse de café :) </p>";
                echo "<a class='next' href='enigme2.php'><img src='image/food_1.png'> Next !</a>";
            } elseif (!empty($_GET["rep1"])) {
                $tentative += 1;
                echo "Loupé ! Quel dommage...";
            } elseif (!empty($_GET["rep2"])) {
                $tentative += 1;
                echo "Loupé ! Quel dommage...";
            } elseif (!empty($_GET["rep4"])) {
                $tentative += 1;
                echo "Loupé ! Quel dommage...";
            }
            $_SESSION['tentative'] = $tentative;
            ?>
        </div>

    </fieldset>

</form>


</body>

