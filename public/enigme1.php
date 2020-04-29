<?php
phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <-Bootstrap CSS->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="GET" action="#">

    <fieldset>

        <legend>Enigme 1 :</legend>
        <div>
            <!-- API -->
        </div>
        <div>
            <p>Indices</p>
        </div>
        <div>
            <div>
            <input type="radio" id="rep1" name="rep1">
                <label for="rep1">Pont de Brooklyn</label>
            </div>
            <div>
                <input type="radio" id="rep2" name="rep2">
                <label for="rep2">Pont de tatara</label>
            </div>
            <div>
                <input type="radio" id="rep3" name="rep3">
                <label for="rep3"></label>
            </div>
            <div>
                <input type="radio" id="rep4" name="rep4">
                <label for="rep4"></label>
            </div>
        </div>
        <div>
            <input type="submit" name="send" id="send">
        </div>




    </fieldset>

</form>

<?php
$tentative = 0;
if(!empty($_GET["send"])){
    $tentative += 1;
    if(!empty($_GET["rep3"])){
        echo "BRAVO ! Angry Justine a trouvé sa tasse de café :) ";
        echo "<a href='enigme2.php'>Next !</a>";
    }else{
        echo "Loupé ! Quel dommage...";
    }
}

?>
<div>
    <?php

    echo "<p> Nombres de tentatives : " . $tentative;
    ?>
    <img src="">
</div>
</body>