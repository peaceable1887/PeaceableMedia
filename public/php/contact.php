<div id="contact">
    <h1>Formulare erstellen</h1><br>
    <form action="../php/index.php?_ijt=contact" method="post">
        <label>Nachname:</label>
        <input type="text" name="nachname" required> <br>
        <label>Vorname:</label>
        <input type="text" name="vorname" required> <br>
        <label>E-Mail:</label>
        <input type="email" name="email" required> <br>
        <label>Betreff:</label>
        <input type="text" name="betreff" required> <br>
        <label>Nachricht:</label>
        <textarea rows="7" name="nachricht" required></textarea> <br>
        <button name="submit" type="submit">Jetzt abschicken!</button>
    </form>
</div>
<?php
    //PHPWarning-Message will not be shown
    error_reporting(E_ERROR);

    $nachname = $_POST["nachname"];
    $vorname = $_POST["vorname"];
    $email = $_POST["email"];
    $betreff = $_POST["betreff"];
    $nachricht = $_POST["nachricht"];

    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "pmediadb");

    //Wird durchgeführt wenn Felder ausgefüllt wurden
    if(isset($_POST["nachname"],$_POST["vorname"],$_POST["email"],$_POST["betreff"],$_POST["nachricht"] ))
    {
        mysqli_query($con, "INSERT INTO contact (nachname,vorname,email,betreff,nachricht) VALUES ('$nachname','$vorname','$email','$betreff','$nachricht')");
    ?>
        <script type="text/javascript">
            window.alert("Anfrage wurde übermitteln!");
        </script>
    <?php
    }
    ?>
    <!-- Import Files -->
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="sub" value="Importieren">
    </form>
    <?php
        include("../database/csvImport.php");
        $csv = new csvImport();
        if(isset($_POST["sub"]))
        {
            $csv->import($_FILES["file"]["tmp_name"]);
        }
    ?>

<!--$result = mysqli_query($con, "SELECT * FROM contact");
while($row = mysqli_fetch_assoc($result))
{
    echo
    (
        $row["nachname"]. ",".
        $row["vorname"]. ",".
        $row["email"]. ",".
        $row["betreff"]. ",".
        $row["nachricht"]. ","
    );
}-->
