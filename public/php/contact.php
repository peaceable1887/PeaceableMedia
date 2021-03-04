<h4>Kontaktieren</h4>
<div class="hr"></div>
<div class="textContact">
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,<br>
        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<br>
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
        At vero eos et accusam et justo duo dolores et ea rebum.<br>
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
</div>

<h4>Formulare erstellen</h4>
<div class="hr"></div>
<div id="contact">
    <form action="index.php?_ijt=contact" method="post" enctype="multipart/form-data">
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
        <input id="fileFile" type="File" name="file">
        <button name="submit" type="submit">Jetzt abschicken</button>
    </form>
</div>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", "On");
    if(isset($_POST["submit"])){
        require_once "../libaries/swiftmailer/vendor/autoload.php";

        $transport = new Swift_SmtpTransport("smtp.gmail.com", 587, "tls");
        $transport->setUsername("fln.hansmann@gmail.com");
        $transport->setPassword("mvqktwkvoyvxxxzr");

        $mail = new Swift_Mailer($transport);
        $transport->setEncryption("tls");
        $message = new Swift_Message("Mein Betreff");
        $message->setFrom($_POST["email"]);
        $message->setTo(["felix-hh1887@hotmail.de"=>"Felix"]);
        $message->setSubject($_POST["betreff"]);
        $message->setBody($_POST["nachricht"]);

        $result = $mail->send($message);

    }
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
<?php
    include("../files/fileUpload.php");
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
