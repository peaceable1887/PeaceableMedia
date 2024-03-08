<div id="menu" >
    <?php
    // Bedingung überprüfen
    if ($_SESSION['changedPage']) 
    {
        echo '
        <a href="home.php">
            <div id="logo">
                <span id="first-name">Felix</span>
                <span id="last-name">Hansmann</span>
            </div>
        </a>
        <nav id="navItems">
        <a class="navLink" href="home.php" data-scroll="home">Home</a>
        <a class="navLink" href="projects.php" data-scroll="projects">Projects</a>
        <a class="navLink" href="footer.php" data-scroll="contact">Contact</a>';
      
    } else 
    {
        echo '
        <a href="#home" data-scroll="home">
            <div id="logo">
                <span id="first-name">Felix</span>
                <span id="last-name">Hansmann</span>
            </div>
        </a>
        <nav id="navItems">
        <a class="navLink" href="#projects" data-scroll="projects">Projects</a>
        <a class="navLink" href="#aboutMe" data-scroll="home">About</a>
        <a class="navLink" href="#contact" data-scroll="contact">Contact</a>';
    }
    ?>
        
    </nav>
    <a href="javascript:void(0);" class="icon" id="menuIcon">
        <i onclick="burgerMenu(); changeMenuIcon(this)" 
        class="fa-solid fa-bars" id="menuIcon"></i>
    </a>
</div>

