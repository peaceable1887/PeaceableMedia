<div id="menu" >
    <?php
    // Bedingung überprüfen
    if ($_SESSION['changedPage']) 
    {
        echo '
        <a class="navLink" id="navLinkLogo" href="https://www.felix-hansmann.de/" data-scroll="home">
            <h1 id="logo">
                <span id="first-name">Felix</span>
                <span id="last-name">Hansmann</span>
            </h1>
        </a>
        <nav id="navItems">
            <a class="navLink" href="#projects" data-scroll="projects">Projekte</a>
            <a class="navLink" href="#aboutMe" data-scroll="aboutMe">Über Mich</a>
            <a class="navLink" href="#mySkills" data-scroll="mySkills">Fähigkeiten</a>
            <a class="navLink" id="call-to-action-btn" href="https://www.felix-hansmann.de/#contact" data-scroll="contact">
                <span class="call-to-action-btn-text">Kontakt</span>
            </a>
        </nav>
        ';
      
    } else 
    {
        echo '
        <a class="navLink" id="navLinkLogo" href="#home" data-scroll="home">
            <h1 id="logo">
                <span id="first-name">Felix</span>
                <span id="last-name">Hansmann</span>
            </h1>
        </a>
        <nav id="navItems">
            <a class="navLink" href="#projects" data-scroll="projects">Projekte</a>
            <a class="navLink" href="#aboutMe" data-scroll="aboutMe">Über Mich</a>
            <a class="navLink" href="#mySkills" data-scroll="mySkills">Fähigkeiten</a>
            <a class="navLink" id="call-to-action-btn" href="#contact" data-scroll="contact">
                <span class="call-to-action-btn-text">Kontakt</span>
            </a>    
        </nav>';
    }
    ?>
        
    
    <a href="javascript:void(0);" class="icon" id="menuIcon">
        <i onclick="burgerMenu(); changeMenuIcon(this)" 
        class="fa-solid fa-bars" id="menuIcon"></i>
    </a>
</div>

