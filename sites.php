<?php
    if($section == "media")
    {
        include("media.php");
    }
    else if($section == "ueber_mich")
    {
        include("aboutMe.php");
    }
    else if($section == "contact")
    {
        include("contact.php");
    }
    else
    {
        include("startseite.php");
    }
?>