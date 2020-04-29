<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<form method="GET" action="#">

    <fieldset>

        <legend>Enigme 5 :</legend>
        <div>
            <!-- API -->
        </div>
        <div>
            <p>Indices</p>
        </div>
        <div>
            <div>
                <input type="radio" id="rep1" name="rep1">
                <label for="rep1"></label>
            </div>
            <div>
                <input type="radio" id="rep2" name="rep2">
                <label for="rep2"></label>
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
    if(!empty($_GET["rep2"])){
        echo "<p>BRAVO ! Angry Justine a trouvé sa brosse à cheveux ;)</p>";
        echo "<a href='final.php'>Next !</a>";
    }else{
        echo "<p>Loupé ! Quel dommage...</p>";
    }
}
?>
<div>
    <?php

    echo "<p> Nombres de tentatives : " . $tentative;
    ?>
    <img src="">
</div>
