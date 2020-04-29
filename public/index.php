<?php
require_once 'class/WindyApi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--<a name="windy-webcam-timelapse-player" data-id="1549489452" href="https://windy.com/webcams/1549489452" >Londres: Big Ben - Westminster</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>-->

<?php
@$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
$camLoc = $cam->getCamLocation(1549489452);

echo $camLoc;
?>


</body>
</html>

<?php
//@$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
//$camLoc = $cam->getCamLocation(1549489452);
//
//echo $camLoc;
//var_dump($camLoc);
