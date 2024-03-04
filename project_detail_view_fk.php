<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h1>Four Kingz</h1>
            <h3>Mobile Browserspiel</h3>
        </header>
        <section class="project-detail-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ratione iste iure architecto aut ducimus, quos cupiditate 
            dolorum placeat aperiam unde sint asperiores.
        </section >
        <figure class="project-detail-images">
            <?php include("slider.php");?>
        </figure>
        <section class="project-detail-technologies">
            <h2>Technologien</h2>
            <figure class="technologies-icons">
                <a href="">
                    <img src="images/github-icon.png">
                </a>
                <a href="">
                    <img src="images/linkedin-icon.png">
                </a>
                <a href="">
                    <img src="images/xing-icon.png">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<?php include("scripts.php");?>
