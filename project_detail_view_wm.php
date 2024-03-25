<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h3>Website Mockups</h3>
            <section class="project-repo">
                <a class="repo-btn" href="https://www.dropbox.com/sh/scn9h50qy36934p/AACyfcjiCEXF0XpfIK4LR5Mna?dl=0" target="_blank">
                    <span class="repo-link-text">Dropbox</span>
                    <img src="images/icons/dropbox.png" alt="Dropbox" width="25" height="25">
                </a>
            </section >
        </header>
        <h4 class="sub-headline">Designkonzeption</h4>
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
                            <img class="imageSlider" src="images/Website_Mockups.jpg" alt="Das Bild Website_Mockups.jpg zeigt drei verschiedene 
                            Designkonzeptionen, von Webseiten, zu den Themen Online-Shop, Architektur und Gaming.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Gaming_Startseite.jpg">
                            <img class="imageSlider" src="images/Gaming_Startseite.jpg" alt="Das Bild Gaming_Startseite.jpg zeigt eine Designkonzept einer Gaming-Webseite.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Architektur_Startseite.jpg">
                            <img class="imageSlider" src="images/Architektur_Startseite.jpg" alt="Das Bild Architektur_Startseite.jpg zeigt eine Designkonzept einer Architektur-Webseite.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Startseite.jpg">
                            <img class="imageSlider" src="images/Shop_Startseite.jpg" alt="Das Bild Shop_Startseite.jpg zeigt eine Designkonzept einer Shop-Webseite.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Warenansicht.jpg">
                            <img class="imageSlider" src="images/Shop_Warenansicht.jpg" alt="Das Bild Shop_Warenansicht.jpg zeigt eine Designkonzept, der Warenansicht, einer Shop-Webseite.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Kontakt.jpg">
                            <img class="imageSlider" src="images/Shop_Kontakt.jpg" alt="Das Bild Shop_Kontakt.jpg zeigt eine Designkonzept, der Kontaktansicht, einer Shop-Webseite.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Shop_Impressum.jpg">
                            <img class="imageSlider" src="images/Shop_Impressum.jpg" alt="Das Bild Shop_Impressum.jpg zeigt eine Designkonzept, des Impressums, einer Shop-Webseite.">
                        </a>
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img class="imageSlider" src="images/Website_Mockups.jpg" alt="Das Bild Website_Mockups.jpg zeigt drei verschiedene 
                    Designkonzeptionen, von Webseiten, zu den Themen Online-Shop, Architektur und Gaming."> 
            </button>
            <button onclick="currentDiv(2)" class="clickable-image">
                <img class="imageSlider" src="images/Gaming_Startseite.jpg" alt="Das Bild Gaming_Startseite.jpg zeigt eine Designkonzept einer Gaming-Webseite.">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image">
                <img class="imageSlider" src="images/Architektur_Startseite.jpg" alt="Das Bild Architektur_Startseite.jpg zeigt eine Designkonzept einer Architektur-Webseite.">
            </button>
            <button onclick="currentDiv(4)" class="clickable-image">
                <img class="imageSlider" src="images/Shop_Startseite.jpg" alt="Das Bild Shop_Startseite.jpg zeigt eine Designkonzept einer Shop-Webseite.">
            </button>
            <button onclick="currentDiv(5)" class="clickable-image">
                <img class="imageSlider" src="images/Shop_Warenansicht.jpg" alt="Das Bild Shop_Warenansicht.jpg zeigt eine Designkonzept, der Warenansicht, einer Shop-Webseite.">
            </button>
            <button onclick="currentDiv(6)" class="clickable-image">
                <img class="imageSlider" src="images/Shop_Kontakt.jpg" alt="Das Bild Shop_Kontakt.jpg zeigt eine Designkonzept, der Kontaktansicht, einer Shop-Webseite.">
            </button>
            <button onclick="currentDiv(7)" class="clickable-image">
                <img class="imageSlider" src="images/Shop_Impressum.jpg" alt="Das Bild Shop_Impressum.jpg zeigt eine Designkonzept, des Impressums, einer Shop-Webseite.">
            </button>
        </figure>
        <section class="project-detail-technologies">
            <h4>Technologien</h4>
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
