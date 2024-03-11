<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h1>Website Mockups</h1>
            <section class="project-repo">
                <a class="repo-btn" href="https://www.dropbox.com/sh/scn9h50qy36934p/AACyfcjiCEXF0XpfIK4LR5Mna?dl=0" target="_blank">
                    <span class="repo-link-text">Dropbox</span>
                    <img src="images/icons/dropbox.png" alt="GitHuB" width="25" height="25">
                </a>
            </section >
        </header>
        <h3 class="sub-headline">Designkonzeption</h3>
        <section class="project-detail-description">
        Die Mockups für die einzelnen Webseiten wurden sowohl aus persönlichem Interesse als auch im Rahmen des Studiums erstellt.
        Die Mockups wurden mit der Software Adobe Photoshop erstellt. Alle enthaltenen Elemente, sei es Grafiken oder Bilder, 
        wurden entweder eigenständig kreiert oder durch Ausschneiden und Einfügen aus anderen Quellen integriert.
        </section >
        <figure class="project-detail-images">
            <section class="slideshow-container">
                <div class="slider-wrapper">
                    <div class="mySlides fade animate-left">
                        <a href="images/Website_Mockups.jpg">
                            <img class="imageSlider" src="images/Website_Mockups.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Gaming_Startseite.jpg">
                            <img class="imageSlider" src="images/Gaming_Startseite.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Architektur_Startseite.jpg">
                            <img class="imageSlider" src="images/Architektur_Startseite.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Startseite.jpg">
                            <img class="imageSlider" src="images/Shop_Startseite.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Warenansicht.jpg">
                            <img class="imageSlider" src="images/Shop_Warenansicht.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Kontakt.jpg">
                            <img class="imageSlider" src="images/Shop_Kontakt.jpg">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Impressum.jpg">
                            <img class="imageSlider" src="images/Shop_Impressum.jpg">
                        </a>
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img class="imageSlider" src="images/Website_Mockups.jpg">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image active">
                <img class="imageSlider" src="images/Gaming_Startseite.jpg">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image">
                <img class="imageSlider" src="images/Architektur_Startseite.jpg">
            </button>
            <button onclick="currentDiv(4)" class="clickable-image active">
                <img class="imageSlider" src="images/Shop_Startseite.jpg">
            </button>
            <button onclick="currentDiv(5)" class="clickable-image">
                <img class="imageSlider" src="images/Shop_Warenansicht.jpg">
            </button>
            <button onclick="currentDiv(6)" class="clickable-image active">
                <img class="imageSlider" src="images/Shop_Kontakt.jpg">
            </button>
            <button onclick="currentDiv(7)" class="clickable-image active">
                <img class="imageSlider" src="images/Shop_Impressum.jpg">
            </button>
        </figure>
        <section class="project-detail-technologies">
            <h2>Technologien</h2>
            <figure class="technologies-icons" style="justify-content: space-around">
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
