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
        <h3 class="sub-headline">Native Mobilanwendung</h3>
        <section class="project-detail-description">
        Die MemoDex-App wird eine innovative Lernanwendung sein, die es den Nutzern ermöglicht, mühelos und effektiv durch den Einsatz von Karteikarten zu lernen.<br> 
            Die Anwendung erlaubt es den Nutzern, individuelle Stapel zu verschiedenen Themen zu erstellen und ihre Karteikarten effizient zu verwalten.<br> 
            Zusätzlich wird es möglich sein, die App, via Browserplugin, mit einem PC zu verbinden, um beispielsweise Fragen und Antworten aus einem PDF nahtlos zu übertragen.
        </section >
        <section class="key-datas">
        <h3>Funktionalitäten</h3>
            <h4>Allgemein</h4>
            <ul>
                <li>Nutzerregistrierung und -anmeldung</li>
                <li>Erstellung, Bearbeitung und Löschung von Stapeln/Karten</li>
                <li>Lernen über das Durchgehen der Karten innerhalb des Stapels</li>
                <li>Karten können mit Richtig/Falsch beantwortet werden</li>
                <li>Möglichkeit, Karten als "Gemerkt" zu kennzeichnen und sie somit aus zukünftigen Durchgängen zu nehmen</li>
                <li>Zeitliche Festhaltung jedes Durchlaufs</li>
                <li>Offline/Online-Funktionalität</li>
            </ul>
            <h4>Statistik</h4>
            <ul>
                <li>Aufzeichnung aller Durchläufe pro Stapel (Datum/Zeit)</li>
                <li>Anzeige der schnellsten, letzten und durchschnittlichen Lernzeiten</li>
                <li>Anzeige des Lernfortschritts in Prozent</li>
                <li>Anzeige der drei Fragen, die am häufigsten falsch beantwortet wurden</li>
            </ul>
            <h4>Einstellungen</h4>
            <ul>
                <li>Dark/Light-Modus</li>
                <li>Änderung der Nutzerdaten wie E-Mail/Passwort</li>
                <li>Endgültiges Löschen oder Wiederherstellen von Stapeln</li>
                <li>Aktivierung/Deaktivierung der Autokorrektur</li>
                <li>Aktivierung/Deaktivierung des Button-Farbmodus</li>
                <li>Farbenblindmodus</li>
                <li>u.v.m.</li>
            </ul>
            <h3>Betriebssysteme</h3>
            <span>Die Anwendung wird für Android und iOS entwickelt.</span>
            <h3>weitere Informationen</h3>
            <span>Die Softwarearchitektur basiert auf dem Client-Server-Modell.
            Die Kommunikation erfolgt über REST-Schnittstellen.</span>
        </section>
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
                <a title="REST" href="https://developer.mozilla.org/en-US/docs/Glossary/REST" target="_blank">
                    <img src="images/icons/api-mobile-program.png" alt="REST">
                </a>
            </figure>
        </section >
   </article >
</main>
<?php include("footer.php");?>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/activeImageButton.js"></script>
<?php include("global_scripts.php");?>
