<?php
require('controllers/EgresoController.php');
require('controllers/IngresoController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Organizer 2</title>
</head>
<body>
    <h1>E puto</h1>
    <?php
    $egresoCtrl = new EgresoController();
    $ingresoCtrl = new IngresoController();
    ?>
    <h1><?= $egresoCtrl->sanityCheck() ?></h1>
    <h1><?= $ingresoCtrl->sanityCheck() ?></h1>
</body>
</html>