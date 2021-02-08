<?php

    if($section == "media")
    {
        include("../php/media.php");
    }
    else if($section == "ueber_mich")
    {
        include("../php/aboutMe.php");
    }
    else if($section == "kontakt")
    {
        include("../php/contact.php");
    }
    else
    {
        include("../php/startseite.php");
    }
?>