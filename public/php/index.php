<?php
    if(isset($_GET["_ijt"]))
    {
        $section = $_GET["_ijt"];
    }else
    {
        $section = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Media</title>
    <link rel="stylesheet" href="../css/globalColor.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <!-- Menu -->
    <div id="menu">
        <?php include("../php/menu.php");?>
    </div>
</header>

<main>
    <?php include("../php/sites.php");?>
</main>
    <?php include("../php/footer.php");?>
</body>
<script type="text/javascript" src="../javascript/slider.js"></script>
</html>