
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-items">
            <?php echo Html::anchor("index.php/eastwest/".$currLink."?direction=".$oppDirection, "Go ".$oppDirection_link); ?>
        </div>
        <div class="nav-items">
            <?php echo Html::anchor("index.php/eastwest/index.php?direction=".$currDirection, "Home"); ?>
            <?php echo Html::anchor("index.php/eastwest/one.php?direction=".$currDirection, "About"); ?>
            <?php echo Html::anchor("index.php/eastwest/two.php?direction=".$currDirection, "Color Coordinates"); ?>
        </div>
    </nav>
    <?php echo $content; ?>
</body>
</html>
