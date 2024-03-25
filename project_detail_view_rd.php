<?php
    session_start();
    $_SESSION['changedPage'] = true;
?>
<?php include("header.php");?>
<main>
   <article class="project-detail-content">
        <header class="project-detail-headlines">
            <h3>Rating Drink</h3>
            <section class="project-repo">
                <a class="repo-btn" href="https://www.dropbox.com/sh/scn9h50qy36934p/AACyfcjiCEXF0XpfIK4LR5Mna?dl=0" target="_blank">
                    <span class="repo-link-text">Dropbox</span>
                    <img src="images/icons/dropbox.png" alt="GitHub" width="25" height="25">
                </a>
            </section >
        </header>
        <h4 class="sub-headline">Designkonzeption</h4>
        <section class="key-datas">
        <h3>Alleinstellungsmerkmal</h3>
        <span>"Rating Drink" ist eine innovative App, die Bewertungen und Rezensionen von
        Getränken in den Fokus stellt.
        Nutzer haben die Möglichkeit, Getränke nach Bewertungen zu sortieren und
        zusätzlich diese auch direkt über die App zu bestellen.
        Die App ermöglicht es den Nutzern, neue Getränke zu entdecken und bietet somit
        eine einzigartige Erfahrung im Bereich der Getränkeauswahl.</span>
        <h3>Zielgruppe</h3>
        <span>"Rating Drink" richtet sich eigentlich an alle Personen, da jeder “trinken” muss.
        Besonders ansprechend ist die App für Menschen, die neugierig sind und gerne
        neue Getränke ausprobieren möchten, aber nicht die Möglichkeit haben, in das
        jeweilige Land oder die Region zu reisen. Die App ist auch für Personen geeignet,
        die sich in der Regel bei der Getränkeauswahl auf die Erfahrungen und
        Bewertungen anderer verlassen, da die App die Möglichkeit bietet, Bewertungen von
        Getränken zu durchsuchen und zu vergleichen.
        </span>
        <h3>Endgeräte</h3>
        <span>Die App wurde für eine Auflösung von 1080 x 2340 Pixel entwickelt, was einem
        Bildformat von 6 Zoll entspricht. Dank ihres anpassungsfähigen Designs kann sie
        jedoch problemlos auf Smartphones mit unterschiedlichen Größen angezeigt
        werden, ohne dass es zu Einschränkungen kommt.
        </span>
        <h3>Typografie</h3>
        <span>Die markante Schriftart für die App "Rating Drink" ist "Sparky Stones".
        Sie verleiht der App einen spielerischen und ungezwungenen Look und ist Teil des
        Logos.
        Sie wird bei wichtigen Text-Elementen wie Seitenüberschriften verwendet.
        Um eine gute Lesbarkeit bei wichtigen Informationen wie Preis, Rezensionen oder
        Produktdetails zu gewährleisten, wurde eine eher konservative Schriftart namens
        "Segoe UI Emoji" ausgewählt.
        Diese wird in der Schrift-Variante "Regular" und in verschiedenen Schriftgrößen
        angewendet.
        </span>
        </section>
        <figure class="project-detail-images">
            <section class="slideshow-container">
                <div class="slider-wrapper">
                    <div class="mySlides fade animate-left">
                        <a href="images/Rating_Drink.jpg">
                            <img class="imageSlider" src="images/Rating_Drink.jpg" alt="Das Bild Rating_Drink.jpg zeigt drei verschiedene Ansichten der Rating Drink App.">
                        </a>
                    </div>
                    <div class="mySlides fade animate-left">
                        <a href="images/Rating_Drink_Mockups.jpg">
                            <img class="imageSlider" src="images/Rating_Drink_Mockups.jpg" alt="Das Bild Rating_Drink.jpg zeigt drei verschiedene Ansichten der Rating Drink App.">
                        </a>
                    </div>
                </div>
            </section>
        </figure>
        <figure id="clickable-slider-images">
            <button onclick="currentDiv(1)" class="clickable-image active">
                <img class="imageSlider" src="images/Rating_Drink.jpg" alt="Das Bild Rating_Drink.jpg zeigt drei verschiedene Ansichten der Rating Drink App.">
            </button>
            <button onclick="currentDiv(2)" class="clickable-image">
                <img class="imageSlider" src="images/Rating_Drink_Mockups.jpg" alt="Das Bild Rating_Drink.jpg zeigt drei verschiedene Ansichten der Rating Drink App.">
            </button>
        </figure>
        <section class="project-detail-technologies">
            <h4>Technologien</h4>
            <figure class="technologies-icons" style="justify-content: space-around">
                <a title="Figma" href="https://www.figma.com/" target="_blank">
                    <img src="images/icons/figma.png" alt="Figma">
                </a>
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
