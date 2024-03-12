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
                    <img src="images/iconmonstr-github-1-240.png" alt="GitHub" width="25" height="25">
                </a>
            </section >
        </header>
        <h3 class="sub-headline">Mobiles Browserspiel</h3>
        <section class="project-detail-description">
        "Four Kingz" ist ein Kartentrinkspiel, das als Browseranwendung für mobile Geräte, mit Vue.js, entwickelt wurde. 
            Das Spiel nutzt ein Skat-Deck mit 32 Karten, wobei jede Karte eine Aktion repräsentiert. 
            Die Spiel endet, sobald vier Könige gezogen wurden.
        </section >
        <section class="key-datas">
        <h3>Funktionsumfang</h3>
            <h4>Spielprinzip</h4>
            <ul>
                <li>Jede Karte hat eine Aktion</li>
                <li>Karten werden abwechselnd im Uhrzeigersinn gezogen</li>
                <li>Die Person die die Karte zieht führt die Aktion aus</li>
                <li>Spiel endet, sobald 4 Könige gezogen wurden</li>
            </ul>
            <h4>Einstellungen</h4>
            <ul>
                <li>Karten können frei belegt werden</li>
                <li>Sound kann an/aus-geschaltet werden</li>
            </ul>
            <h3>Betriebssysteme</h3>
            <span>Die Anwendung ist auf allen gängigen Browser lauffähig.</span>
            <h3>weitere Informationen</h3>
            <span>
            Die Software stellt eine dedizierte Clientanwendung für den Webbrowser dar und wurde unter Verwendung des Vue.js-Frameworks entwickelt.
            </span>
        </section>
        <figure class="project-detail-images">
            <div class="slider-wrapper">
                <div class="mySlides fade animate-left">
                    <a href="images/FourKingz_Cover.jpg">
                        <img class="imageSlider" src="images/FourKingz_Cover.jpg" alt="Das Bild FourKingz_Cover.jpg zeigt, als Flyer, einzelne Screens der App.">
                    </a>    
                </div>
                <div class="mySlides fade animate-left">
                    <a href="images/FourKingz_All_Screens.jpg">
                        <img class="imageSlider" src="images/FourKingz_All_Screens.jpg" alt="Das Bild FourKingz_Cover.jpg zeigt alle Screens der App.">
                    </a>   
                </div>
                <div class="mySlides fade animate-left">
                    <video src="videos/FourKingz_Screencast.mp4" controls></video>
                </div>
            </div>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img src="images/FourKingz_Cover.jpg" alt="Das Bild FourKingz_Cover.jpg zeigt, als Flyer, einzelne Screens der App.">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image">
                <img src="images/FourKingz_All_Screens.jpg" alt="Das Bild FourKingz_Cover.jpg zeigt alle Screens der App."> 
            </button>
            <button onclick="currentDiv(3)" class="clickable-image" >
                <img src="images/play_video_icon.jpg" alt="Demovideo der App FourKingz.">
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
