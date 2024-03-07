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
                <a class="repo-btn" href="https://github.com/peaceable1887/memo_dex_client" target="_blank">
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
                <a title="Figma" href="https://www.figma.com/" target="_blank">
                    <img src="images/icons/figma.png" alt="Figma">
                </a>
                <a title="NodeJS" href="https://nodejs.org/" target="_blank">
                    <img src="images/icons/node-js.png" alt="NodeJS">
                </a>
                <a title="MySQL" href="https://www.mysql.com/" target="_blank">
                    <img src="images/icons/mysql.png" alt="MySQL">
                </a>
            </figure>
            <figure class="technologies-icons">
                <a title="Express" href="https://expressjs.com/" target="_blank">
                    <img src="images/icons/express.png" alt="Express">
                </a>
                <a title="Flutter" href="https://flutter.dev/" target="_blank">
                    <img src="images/icons/flutter.png" alt="Flutter">
                </a>
                <a title="RESTful" href="https://en.wikipedia.org/wiki/REST" target="_blank">
                    <img src="images/icons/api-mobile-program.png" alt="RESTful">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>
