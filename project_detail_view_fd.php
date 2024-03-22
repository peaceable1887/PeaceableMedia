<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h1>Flyer Designs</h1>
            <section class="project-repo">
                <a class="repo-btn" href="https://www.dropbox.com/sh/jgqubfau4qbfkhr/AAAZ3PBKvXckppc1Aa1NSUGFa?dl=0" target="_blank">
                    <span class="repo-link-text">Dropbox</span>
                    <img src="images/icons/dropbox.png" alt="Dropbox" width="25" height="25">
                </a>
            </section >
        </header>
        <h3 class="sub-headline">Designkonzeption</h3>
        <section class="project-detail-description">
        Die Aufgabe beim Flyer für die Uhr bestand darin, eine Printanzeige für eine innovative Armbanduhr zu gestalten, die sich auf irgendeine Weise von gängigen Modellen unterscheidet. 
        Dabei war kreative Freiheit ausdrücklich erwünscht. Die andere Aufgabe bestand darin, einen Leporello-Flyer für eine Ausstellung in einem Kunstmuseum zu entwerfen. 
        Hierbei war die Wahl der Kunstperiode offen, jedoch war es wichtig, dass das Thema klar erkennbar ist und drei Künstler vorgestellt werden.
        </section >
        <figure class="project-detail-images">
            <section class="slideshow-container">
                <div class="slider-wrapper">
                    <div class="mySlides fade animate-left">
                        <a href="images/Flyer_Uhr_3D.jpg">
                            <img class="imageSlider" src="images/Flyer_Uhr_3D.jpg" alt="Das Bild zeigt eine Printanzeige für eine innovative Armbanduhr, 
                            die in einer gekruemmten 3D-Darstellung praesentiert wird.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Flyer_Uhr.jpg">
                            <img class="imageSlider" src="images/Flyer_Uhr.jpg" alt="Das Bild zeigt eine Printanzeige fuer eine neuartige Armbanduhr.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Flyer_Leporello_Vorderseite.jpg">
                            <img class="imageSlider" src="images/Flyer_Leporello_Vorderseite.jpg" alt="Das Bild zeigt die Vorderseite eines Leporello-Fylers einer Kunstausstellung.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Flyer_Leporello_Rueckseite.jpg">
                            <img class="imageSlider" src="images/Flyer_Leporello_Rueckseite.jpg" alt="Das Bild zeigt die Rueckseite eines Leporello-Fylers einer Kunstausstellung.">
                        </a>
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img class="imageSlider" src="images/Flyer_Uhr_3D.jpg" alt="Das Bild zeigt eine Printanzeige für eine innovative Armbanduhr, 
                            die in einer gekruemmten 3D-Darstellung praesentiert wird."> 
            </button>
            <button onclick="currentDiv(2)" class="clickable-image">
                <img class="imageSlider" src="images/Flyer_Uhr.jpg" alt="Das Bild zeigt eine Printanzeige fuer eine neuartige Armbanduhr.">
            </button>
            <button onclick="currentDiv(3)" class="clickable-image">
                <img class="imageSlider" src="images/Flyer_Leporello_Vorderseite.jpg" alt="Das Bild zeigt die Vorderseite eines Leporello-Fylers einer Kunstausstellung.">
            </button>
            <button onclick="currentDiv(4)" class="clickable-image">
                <img class="imageSlider" src="images/Flyer_Leporello_Rueckseite.jpg" alt="Das Bild zeigt die Rueckseite eines Leporello-Fylers einer Kunstausstellung.">
            </button>
        </figure>
        <section class="project-detail-technologies">
            <h2>Technologien</h2>
            <figure class="technologies-icons" style="justify-content: space-around">
                <a title="Adobe Photoshop" href="https://www.adobe.com/de/products/photoshop.html" target="_blank">
                    <img src="images/icons/photoshop.png" alt="Adobe Photoshop">
                </a>
                <a title="Figma" href="https://www.figma.com/" target="_blank">
                    <img src="images/icons/figma.png" alt="Figma">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>
