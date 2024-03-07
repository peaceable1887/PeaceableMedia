<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h1>FourKingz</h1>
            <section class="project-repo">
                <a class="repo-btn" href="https://github.com/peaceable1887/FourKingz" target="_blank">
                    <span class="repo-link-text">GitHub</span>
                    <img src="images/iconmonstr-github-1-240.png" alt="GitHuB" width="25" height="25">
                </a>
            </section >
        </header>
        <h3>Mobiles Browserspiel</h3>
        <section class="project-detail-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ratione iste iure architecto aut ducimus, quos cupiditate 
            dolorum placeat aperiam unde sint asperiores.
        </section >
        <figure class="project-detail-images">
            <div class="slider-wrapper">
                <div class="mySlides fade animate-left">
                    <img class="imageSlider" src="images/FourKingz_01.jpg">
                </div>
                <div class="mySlides fade animate-left">
                    <img class="imageSlider" src="images/FourKingz.jpg">
                </div>
                <div class="mySlides fade animate-left">
                    <video src="videos/FourKingz_Screencast.mp4" controls></video>
                </div>
            </div>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img src="images/FourKingz_01.jpg">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image active">
                <img src="images/FourKingz.jpg">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image active">
                <img src="images/play_video_icon.jpg">
            </button>
        </figure>
        <section class="project-detail-technologies">
            <h2>Technologien</h2>
            <figure class="technologies-icons">
                <a title="Vue.js" href="https://vuejs.org/" target="_blank">
                    <img src="images/icons/vue-dot-js.png" alt="NodeJS">
                </a>
                <a title="HTML5" href="https://www.w3schools.com/html/" target="_blank">
                    <img src="images/icons/html.png" alt="HTML5">
                </a>
                <a title="CSS3" href="https://www.w3schools.com/css/" target="_blank">
                    <img src="images/icons/css.png" alt="CSS">
                </a>
            </figure>
            <figure class="technologies-icons" style="justify-content: center">
                <a title="Adobe Photoshop" href="https://www.adobe.com/de/products/photoshop.html" target="_blank">
                    <img src="images/icons/photoshop.png" alt="Adobe Photoshop">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>
