<?php
    $conn = new dbCon();

    if(isset($_POST["submit"]))
    {
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

        $tname = $_FILES["file"]["tmp_name"];

        $uploads_dir = "/images";

        move_uploaded_file($tname,$uploads_dir."/".$pname);

        //if-abfrage ob Datei eingefügt wurde.
        if($_FILES["file"]["tmp_name"]!="")
        {
            $sql = "INSERT INTO files(image) VALUES ('$pname')";

            if(mysqli_query($conn, $sql))
            {
                echo("Datei wurde übermittelt.");
            }else {
                echo("Datei konnte nicht übermittelt werden.");
            }
        }else{
           echo ("Bitte eine Datei einfügen!");
        }
    }

