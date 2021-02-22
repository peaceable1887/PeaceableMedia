<!--<form method="post" action="send_email.php">
    <label for="Name"><b>Name:</b></label><br>
    <input type="text" id="Name" name="Name"><br><br>

    <label for="Email"><b>E-Mail:</b></label><br>
    <input type="text" id="Email" name="Email"><br><br>

    <label for="Betreff"><b>Betreff:</b></label><br>
    <input type="text" id="Betreff" name="Betreff"><br><br>

    <label for="Nachricht"><b>Nachricht:</b></label><br>
    <textarea id="Nachricht" name="Nachricht" rows="10" cols="50"></textarea> <br><br>

    <input type="submit" name="submit">
</form>-->
<div id="contact">
    <h1>Formulare erstellen</h1><br>
    <form action="index.php?_ijt=contact" method="post">
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

    include("../database/dbCon.php");
    $con = new dbCon();

    $nachname = $_POST["nachname"];
    $vorname = $_POST["vorname"];
    $email = $_POST["email"];
    $betreff = $_POST["betreff"];
    $nachricht = $_POST["nachricht"];

    //Wird durchgeführt wenn Felder ausgefüllt sind
    if(isset($_POST["nachname"],$_POST["vorname"],$_POST["email"],$_POST["betreff"],$_POST["nachricht"] ))
    {
        mysqli_query($con, "INSERT INTO contact (nachname,vorname,email,betreff,nachricht) VALUES ('$nachname','$vorname','$email','$betreff','$nachricht')");
?>
    <script type="text/javascript">
        window.alert("Anfrage wurde übermittelt!");
    </script>
<?php
    }
?>
    <!-- Import Files -->
    <form method="post" enctype="multipart/form-data">
        <input type="File" name="file">
        <input type="submit" name="submit">
    </form>
<?php
    include("../files/fileUplaod.php");
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
