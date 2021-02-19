<?php
    $conn = new dbCon();

    if(isset($_POST["submit"]))
    {
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

        $tname = $_FILES["file"]["tmp_name"];

        $uploads_dir = "/images";

        move_uploaded_file($tname,$uploads_dir."/".$pname);

        $sql = "INSERT INTO files(image) VALUES ('$pname')";

        if(mysqli_query($conn, $sql))
        {
            echo("Hat geklappt");
        }else{
            echo("fehlgeschlagen");
        }
    }

