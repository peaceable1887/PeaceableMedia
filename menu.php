<div id="menu" >
    <?php
    // Bedingung überprüfen
    if ($_SESSION['changedPage']) 
    {
        echo '
        <a class="navLink" id="navLinkLogo" href="https://www.felix-hansmann.de/" data-scroll="home">
            <div id="logo">
                <span id="first-name">Felix</span>
                <span id="last-name">Hansmann</span>
            </div>
        </a>
        <nav id="navItems">
        <a class="navLink" href="https://www.felix-hansmann.de/#projects" data-scroll="projects">Projekte</a>
        <a class="navLink" href="https://www.felix-hansmann.de/#aboutMe" data-scroll="aboutMe">Über Mich</a>
        <a class="navLink" href="https://www.felix-hansmann.de/#contact" data-scroll="contact">Kontakt</a>';
      
    } else 
    {
        echo '
        <a class="navLink" class="navLink" id="navLinkLogo" href="#home" data-scroll="home">
            <div id="logo">
                <span id="first-name">Felix</span>
                <span id="last-name">Hansmann</span>
            </div>
        </a>
        <nav id="navItems">
        <a class="navLink" href="#projects" data-scroll="projects">Projekte</a>
        <a class="navLink" href="#aboutMe" data-scroll="aboutMe">Über Mich</a>
        <a class="navLink" href="#contact" data-scroll="contact">Kontakt</a>';
    }
    ?>
        
    </nav>
    <a href="javascript:void(0);" class="icon" id="menuIcon">
        <i onclick="burgerMenu(); changeMenuIcon(this)" 
        class="fa-solid fa-bars" id="menuIcon"></i>
    </a>
</div>

