<div id="contact">
    <h1>Formulare erstellen</h1><br>
    <form action="../database/inputDB.php" method="post">
        <label>Nachname:</label>
        <input type="text" name="nachname"> <br>
        <label>Vorname:</label>
        <input type="text" name="vorname"> <br>
        <label>E-Mail:</label>
        <input type="email" name="email" required> <br>
        <label>Betreff:</label>
        <input type="text" name="betreff"> <br>
        <label>Nachricht:</label>
        <textarea rows="7" name="nachricht" required></textarea> <br>
        <button id="submit" type="submit">Jetzt abschicken!</button>
    </form>
</div>

<?php
    $nachname = $_POST["nachname"];
    $vorname = $_POST["vorname"];
    $email = $_POST["email"];
    $betreff = $_POST["betreff"];
    $nachricht = $_POST["nachricht"];

    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "pmedia");
    mysqli_query($con, "INSERT INTO contact (nachname,vorname,email,betreff,nachricht) VALUES ('$nachname','$vorname','$email','$betreff','$nachricht')");

    /*$result = mysqli_query($con, "SELECT * FROM contact");
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
    }*/
?>


