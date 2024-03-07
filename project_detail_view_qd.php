<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h1>Quizduell</h1>
            <section class="project-repo">
                <a class="repo-btn" href="https://github.com/peaceable1887/Quizduell" target="_blank">
                    <span class="repo-link-text">GitHub</span>
                    <img src="images/iconmonstr-github-1-240.png" alt="GitHuB" width="25" height="25">
                </a>
            </section >
        </header>
        <h3>Browserspiel</h3>
        <section class="project-detail-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ratione iste iure architecto aut ducimus, quos cupiditate 
            dolorum placeat aperiam unde sint asperiores.
        </section >
        <figure class="project-detail-images">
            <section class="slideshow-container">
                <div class="slider-wrapper">
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <video src="videos/ScreenCast_Quizduell.mp4" controls></video>
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell - Profil bearbeiten.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell - Lobby.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell - Home.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell - Frage.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell - Auswertung.jpg">
                    </div>
                    <div class="mySlides fade animate-left">
                        <img class="imageSlider" src="images/Quizduell - Spiel erstellen.jpg">
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img src="images/Quizduell.jpg">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image active">
                <img src="images/play_video_icon.jpg">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image">
                <img src="images/Quizduell - Profil bearbeiten.jpg">
            </button>
            <button onclick="currentDiv(4)" class="clickable-image active">
                <img src="images/Quizduell - Lobby.jpg">
            </button>
            <button onclick="currentDiv(5)" class="clickable-image">
                <img src="images/Quizduell - Home.jpg">
            </button>
            <button onclick="currentDiv(6)" class="clickable-image active">
                <img src="images/Quizduell - Frage.jpg">
            </button>
            <button onclick="currentDiv(7)" class="clickable-image active">
                <img src="images/Quizduell - Auswertung.jpg">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image active">
                <img src="images/Quizduell - Spiel erstellen.jpg">
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
            <figure class="technologies-icons">
                <a title="Adobe Photoshop" href="https://www.adobe.com/de/products/photoshop.html" target="_blank">
                    <img src="images/icons/photoshop.png" alt="Adobe Photoshop">
                </a>
                <a title="Spring Boot" href="https://spring.io/projects/spring-boot" target="_blank">
                    <img src="images/icons/spring.png" alt="Spring Boot">
                </a>
                <a title="Java" href="https://www.java.com/de/" target="_blank">
                    <img src="images/icons/java.png" alt="Java">
                </a>
            </figure>
            <figure class="technologies-icons" style="justify-content: space-around;">
                <a title="RESTful" href="https://en.wikipedia.org/wiki/REST" target="_blank">
                    <img src="images/icons/api-mobile-program.png" alt="RESTful">
                </a>
                <a title="WebSocket" href="https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API" target="_blank">
                    <img src="images/icons/websocket.png" alt="WebSocket">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>

