
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <?php echo Asset::css($css) ?>
</head>
<body>
    <nav class="navbar">
        <div class="nav-items">
            <?php echo Html::anchor("index.php/mtnl/index", "Home"); ?>
            <?php echo Html::anchor("index.php/mtnl/about", "About"); ?>
            <?php echo Html::anchor("index.php/mtnl/cc", "Color Coordinates"); ?>
        </div>
    </nav>
    <?php echo Asset::img("MTNLlogo.png", array('class' => 'logo-image')) ?>
    <?php echo $content; ?>
</body>
</html>
