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
        <h3 class="sub-headline">Multiplayer Browserspiel</h3>
        <section class="project-detail-description">
        "Quizduell" ist ein Multiplayer-Spiel, bei dem zwei Spieler in sechs Runden gegeneinander antreten. 
            Dabei werden Fragen zum Thema Informatik gestellt, 
            der Spieler, der am Ende mehr Fragen korrekt beantwortet hat, gewinnt das Spiel.
        </section >
        <section class="key-datas">
        <h3>Funktionsumfang</h3>
            <h4>Ablauf</h4>
            <ul>
                <li>Spieler können offene Spiele in einer Lobby finden</li>
                <li>Spieler können Spiele selber erstellen</li>
                <li>Spiel wird gestartet sobald beide Spieler bereit sind</li>
            </ul>
            <h4>Spielprinzip</h4>
            <ul>
                <li>Zwei Spieler treten in Echtzeit gegeneinander an</li>
                <li>Verschiendene Kategorien aus dem Bereich der Informatik</li>
                <li>Frage und Kategorien werden zufällig ausgewählt</li>
                <li>Fragen werden gleichzeitig gestellt und beantwortet</li>
                <li>Spieler haben 20 Sekunden Zeit, um eine Frage zu beantworten</li>
                <li>Sobald ein Spieler geantwortet hat, hat der andere nur noch 6 Sekunden zeit.</li>
                <li>Es werden 6 Fragen pro Spiel gestellt</li>
                <li>Wer mehr Fragen richtig beantwortet hat gewonnen</li>
            </ul>
            <h4>weitere Funktionen</h4>
            <ul>
                <li>Spieler können personalisierten Avatar erstellen</li>
                <li>Statistik wird über jeden Spieler geführt und ist einsehbar</li>
            </ul>
            <h3>Betriebssysteme</h3>
            <span>Die Anwendung ist auf allen gängigen Browser lauffähig.</span>
            <h3>weitere Informationen</h3>
            <span>Die Softwarearchitektur basiert auf dem Client-Server-Modell, 
                wobei Vue.js für die Entwicklung des Clients und Spring Boot für den Server eingesetzt wurden.<br> 
                Als Datenbank wurde ein relationales MySQL-Datenbankschema gewählt.<br> 
                Die Interaktion zwischen Client und Server erfolgt über REST-Schnittstellen und WebSocket-Kommunikation.
            </span>
        </section>
        <figure class="project-detail-images">
            <section class="slideshow-container">
                <div class="slider-wrapper">
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell.jpg">
                            <img class="imageSlider" src="images/Quizduell.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <video src="videos/ScreenCast_Quizduell.mp4" controls></video>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell - Profil bearbeiten.jpg">
                            <img class="imageSlider" src="images/Quizduell - Profil bearbeiten.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell - Lobby.jpg">
                            <img class="imageSlider" src="images/Quizduell - Lobby.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell - Home.jpg">
                            <img class="imageSlider" src="images/Quizduell - Home.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell - Frage.jpg">
                            <img class="imageSlider" src="images/Quizduell - Frage.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell - Auswertung.jpg">
                            <img class="imageSlider" src="images/Quizduell - Auswertung.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Quizduell - Spiel erstellen.jpg">
                            <img class="imageSlider" src="images/Quizduell - Spiel erstellen.jpg">
                        </a>
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img src="images/Quizduell.jpg">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image">
                <img src="images/play_video_icon.jpg">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image">
                <img src="images/Quizduell - Profil bearbeiten.jpg">
            </button>
            <button onclick="currentDiv(4)" class="clickable-image">
                <img src="images/Quizduell - Lobby.jpg">
            </button>
            <button onclick="currentDiv(5)" class="clickable-image">
                <img src="images/Quizduell - Home.jpg">
            </button>
            <button onclick="currentDiv(6)" class="clickable-image">
                <img src="images/Quizduell - Frage.jpg">
            </button>
            <button onclick="currentDiv(7)" class="clickable-image">
                <img src="images/Quizduell - Auswertung.jpg">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image">
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
            <figure class="technologies-icons">
                <a title="REST" href="https://developer.mozilla.org/en-US/docs/Glossary/REST" target="_blank">
                    <img src="images/icons/api-mobile-program.png" alt="REST">
                </a>
                <a title="WebSocket" href="https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API" target="_blank">
                    <img src="images/icons/websocket.png" alt="WebSocket">
                </a>
                <a title="MySQL" href="https://www.mysql.com/" target="_blank">
                    <img src="images/icons/mysql.png" alt="MySQL">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>

