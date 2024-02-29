<?php
    session_start();
    $_SESSION['changedPage'] = false;
?>
<?php include("header.php"); ?>
<main>
    <!-- Seitenabfrage -->
    <?php include("sites.php"); ?>

    <section id="home" data-anchor="home"></section>
    <?php include("home.php");?>

    <section id="projects" data-anchor="projects"></section>
    <?php include("projects.php");?>

    <section id="aboutMe" data-anchor="aboutMe"></section>
    <?php include("aboutMe.php");?>

</main>
    <!--Footer -->
    <section id="contact" data-anchor="contact"></section>
    <?php include("footer.php");?>

<?php include("scripts.php");?>