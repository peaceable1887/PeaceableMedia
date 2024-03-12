<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
    <div class="impressum-container">
        <section class="impressum-content">
            <h1>Impressum</h1>
            <div class="impressum-content-adress">
                <p>Felix Hansmann</p>
                <p>Rissener Landstra&szlig;e 233</p>
                <p>22559 Hamburg</p>
            </div>
            <h2>Kontakt</h2>
            <div class="impressum-content-contact">
                <p>Telefon: 015170536908</p>
                <p>E-Mail: felix.hansmann@outlook.de</p>
            </div>
            <span class="impressum-content-source">Quelle: 
                <a href="https://www.e-recht24.de">e-recht24.de</a>
            </span>
        </section>
    </div>
</main>
<?php include("footer.php");?>
<?php include("global_scripts.php");?>
