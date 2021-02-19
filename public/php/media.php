<?php
   /* echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    // Dateityp der zulässig ist
    $zugelassenedateitypen = array("image/png", "image/jpeg", "image/gif");

    if ( $_FILES['uploaddatei']['name']) {
        if (!in_array($_FILES['uploaddatei']['type'], $zugelassenedateitypen)) {
            echo "Dateitype ist NICHT zugelassen";
        } else {
            move_uploaded_file(
                $_FILES['uploaddatei']['tmp_name'],
                'hochgeladenes/' . $_FILES['uploaddatei']['name']);

            echo "Hochladen war erfolgreich: ";
            echo '<a href="hochgeladenes/' . $_FILES['uploaddatei']['name'] . '">';
            echo 'hochgeladenes/' . $_FILES['uploaddatei']['name'];
            echo '</a>';
        }
    }

function clear_filename($dateiname)
{
    // erwünschte Zeichen erhalten bzw. umschreiben
    // aus allen ä wird ae, ü -> ue, ß -> ss (je nach Sprache mehr Aufwand)
    // und sonst noch ein paar Dinge (ist schätzungsweise mein persönlicher Geschmack ;)
    $dateiname = strtolower ( $dateiname );
    $dateiname = str_replace ('"', "-", $dateiname );
    $dateiname = str_replace ("'", "-", $dateiname );
    $dateiname = str_replace ("*", "-", $dateiname );
    $dateiname = str_replace ("ß", "ss", $dateiname );
    $dateiname = str_replace ("ß", "ss", $dateiname );
    $dateiname = str_replace ("ä", "ae", $dateiname );
    $dateiname = str_replace ("ä", "ae", $dateiname );
    $dateiname = str_replace ("ö", "oe", $dateiname );
    $dateiname = str_replace ("ö", "oe", $dateiname );
    $dateiname = str_replace ("ü", "ue", $dateiname );
    $dateiname = str_replace ("ü", "ue", $dateiname );
    $dateiname = str_replace ("Ä", "ae", $dateiname );
    $dateiname = str_replace ("Ö", "oe", $dateiname );
    $dateiname = str_replace ("Ü", "ue", $dateiname );
    $dateiname = htmlentities ( $dateiname );
    $dateiname = str_replace ("&", "und", $dateiname );
    $dateiname = str_replace (" ", "und", $dateiname );
    $dateiname = str_replace ("(", "-", $dateiname );
    $dateiname = str_replace (")", "-", $dateiname );
    $dateiname = str_replace (" ", "-", $dateiname );
    $dateiname = str_replace ("'", "-", $dateiname );
    $dateiname = str_replace ("/", "-", $dateiname );
    $dateiname = str_replace ("?", "-", $dateiname );
    $dateiname = str_replace ("!", "-", $dateiname );
    $dateiname = str_replace (":", "-", $dateiname );
    $dateiname = str_replace (";", "-", $dateiname );
    $dateiname = str_replace (",", "-", $dateiname );
    $dateiname = str_replace ("--", "-", $dateiname );

    $dateiname = filter_var($dateiname, FILTER_SANITIZE_URL);
    return ($dateiname);
}*/
?>
<div class="background-media">
</div>
    <ul id="galerie">
        <li><button tabindex="1"><img src="../images/Gaming-Template%20-%20Kopie-1.png" alt="Spaß in der Sonne"></button></li>
        <li><button tabindex="1"><img src="../images/Parallax%20-%20Architekur-1.png" alt="Berg im Morgennebel"></button></li>
        <li><button tabindex="1"><img src="../images/Flyer-Uhr.jpg" alt="Spaß in der Sonne"></button></li>
        <li><button tabindex="1"><img src="../images/Smartphone-Flyer%20(1).jpg" alt="Korallenriff"></button></li>
        <li><button tabindex="1"><img src="../images/KMI-Visitenkarten-farbe.jpg" alt="Morgensonne am Gardasee"></button></li>
        <li><button tabindex="1"><img src="../images/Visitenkarten-Farbe%20(1).jpg" alt="Via Appia, Rom"></button></li>
        <li><button tabindex="1"><img src="../images/Gaming-Template%20-%20Kopie-1.png" alt="Spaß in der Sonne"></button></li>
        <li><button tabindex="1"><img src="../images/Parallax%20-%20Architekur-1.png" alt="Berg im Morgennebel"></button></li>
        <li><button tabindex="1"><img src="../images/Flyer-Uhr.jpg" alt="Spaß in der Sonne"></button></li>
        <li><button tabindex="1"><img src="../images/Smartphone-Flyer%20(1).jpg" alt="Korallenriff"></button></li>
        <li><button tabindex="1"><img src="../images/KMI-Visitenkarten-farbe.jpg" alt="Morgensonne am Gardasee"></button></li>
        <li><button tabindex="1"><img src="../images/Visitenkarten-Farbe%20(1).jpg" alt="Via Appia, Rom"></button></li>
    </ul>
<!-- Uploadbereicht -->
<!--<div class="uploadArea">
    <form name="uploadformular" enctype="multipart/form-data" action="media.php" method="post">
        Datei: <input type="file" name="uploaddatei" size="60" maxlength="255">
        <input type="submit" name="submit" value="Datei hochladen">
    </form>
</div>-->
