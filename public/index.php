<?php
require_once 'class/WindyApi.php';
?>
<?php
phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
<?php
@$cam = new WindyApi(zstN1Wb3W5GWTdmXMHvyScEs7TXJdpWL);
$camLoc = $cam->getCamLocation(1549489452);

echo $camLoc;

?>
</div>
</body>
</html>

