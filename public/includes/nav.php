<nav>
    <ul>
        <li><a href="../html/index.php">Startseite</a></li>
        <li><a href="../html/media.php">Media</a></li>
        <li><a href="../html/aboutMe.html">Über Mich</a></li>
        <li><a href="../html/contact.php">Kontakt</a></li>
    </ul>
</nav>

<?php if ($_SERVER["SCRIPT_NAME"] == "media.php") : ?>
    <li aria-current="page"><a>Media</a></li>
<?php else : ?>
    <li><a href="../html/media.php">Media</a></li>
<?php endif; ?>

<?php if ($_SERVER["SCRIPT_NAME"] == "media.php") : ?>
    <li aria-current="page"><a>Media</a></li>
<?php else : ?>
    <li><a href="../html/media.php">Media</a></li>
<?php endif; ?>

<?php if ($_SERVER["SCRIPT_NAME"] == "contact.php") : ?>
    <li aria-current="page"><a>Kontakt</a></li>
<?php else : ?>
    <li><a href="../html/contact.php">Kontakt</a></li>
<?php endif; ?>


