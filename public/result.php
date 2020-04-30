<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="JK-content">
    <div class="img">
        <img class="avatar" src="image/Avatar6.png">
        <div class="icons">
            <img class="icon" src='image/food_1.png'>
            <img class="icon" src='image/clothes.png'>
            <img class="icon" src='image/mascara.png'>
            <img class="icon" src='image/hairdressing.png'>
            <img class="icon" src='image/food.png'>
        </div>
        <div class="score">
            <?php
            echo "<p class='tentative'> Nombre de tentatives : " . $_SESSION['tentative'];
            ?>
        </div>
    </div>
    <div class="final">
        <h5>Nous avons réussi !</h5>
        <p>Merci beaucoup pour ton aide !</p>
        <img src="image/result.png">
    </div>
</div>
</body>
