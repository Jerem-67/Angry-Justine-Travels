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
<img src="image/Avatar1.png">
</div>
<form method="GET" action="#">

    <fieldset>

        <h2>Enigme 1 :</h2>
        <div>
            <p>Combien de mètres mesure la tour Eiffel ?</p>
        </div>
        <div class="container">
            <?php
                require_once './class/WindyApi.php';
                @$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
                $camLoc = $cam->getCamLocation(1228218512);

                echo $camLoc;
            ?>
        <div>
            <p class="indice">Indices</p>
        </div>
            <div class="c1" onclick="pchild=this.getElementsByTagName('p'); if(pchild[0].style.visibility!='hidden'){pchild[0].style.visibility='hidden'; pchild[0].style.height='0';}else{pchild[0].style.visibility=''; pchild[0].style.height=''}">Indice <p style="">Indice pour la Tour Eiffel</p> </div>
        <div class="rep">
            <div class="interieur">
                <div>
                    <input type="submit" value="122 mètres" class="btn" name="rep1">
                </div>
                <div>
                    <input type="submit" value="288 mètres" class="btn" name="rep2">
                </div>
            </div>


            <div class="interieur">
                <div>
                    <input type="submit" value="324 mètres" class="btn" name="rep3">
                </div>
                <div>
                    <input type="submit" value="503 mètres" class="btn" name="rep4">
                </div>
            </div>
        </div>
        <div class="reponse">
            <?php
            $tentative = 0;
            if (!empty($_GET["rep3"])) {
                $tentative += 1;
                echo "<p>BRAVO ! Angry Justine a trouvé sa tasse de café :) </p>";
                echo "<a class='next' href='enigme2.php'><img src='image/food_1.png'> Next !</a>";
            } elseif (!empty($_GET["rep1"])) {
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

</body>