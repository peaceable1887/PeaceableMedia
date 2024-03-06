<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h1>MemoDex</h1>
            <section class="project-repo">
                <a class="repo-btn" href="">
                    <span class="repo-link-text">GitHub</span>
                    <img src="images/iconmonstr-github-1-240.png" alt="GitHuB" width="25" height="25">
                </a>
            </section >
        </header>
        <h3>Native Mobilanwendung</h3>
        <section class="project-detail-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ratione iste iure architecto aut ducimus, quos cupiditate 
            dolorum placeat aperiam unde sint asperiores.
        </section >
        <figure class="project-detail-images">
            <section class="slideshow-container">
                <div class="slider-wrapper">
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Website - MemoDex - Pic02.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Website - MemoDex - Pic03.jpg">
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img src="images/Website - MemoDex - Pic02.jpg">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image">
                <img src="images/Website - MemoDex - Pic03.jpg">
            </button>
        </figure>
        <section class="project-detail-technologies">
            <h2>Technologien</h2>
            <figure class="technologies-icons">
                <a href="">
                    <img src="images/figma.png" alt="Figma" width="50" height="50">
                </a>
                <a href="">
                    <img src="images/nodejs.png" alt="NodeJS" width="60" height="60">
                </a>
                <a href="">
                    <img src="images/mysql.png" alt="MySQL" width="60" height="60">
                </a>
            </figure>
            <figure class="technologies-icons">
                <a href="">
                    <img src="images/express.png" alt="Express" width="60" height="60">
                </a>
                <a href="">
                    <img src="images/flutter.png" alt="Flutter" width="50" height="50">
                </a>
                <a href="">
                    <img src="images/rest-api-icon.png" alt="REST API" width="55" height="50">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>
