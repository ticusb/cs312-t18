
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
<img src = "MTNLlogo.png">
    <nav class="navbar">
        <div class="nav-items">
            <?php echo Html::anchor("index.php/mtnl/index", "Home"); ?>
            <?php echo Html::anchor("index.php/mtnl/about", "About"); ?>
            <?php echo Html::anchor("index.php/mtnl/cc", "Color Coordinates"); ?>
        </div>
    </nav>
    <?php echo $content; ?>
</body>
</html>
<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
    <div id="myDropdown" class="dropdown-content">
        <a href="#">Red</a>
        <a href="#">Orange</a>
        <a href="#">Yellow</a>
        <a href="#">green</a>
        <a href="#">blue</a>
        <a href="#">purple</a>
        <a href="#">grey</a>
        <a href="#">brown</a>
        <a href="#">black</a>
        <a href="#">teal</a>
    </div>
</div>