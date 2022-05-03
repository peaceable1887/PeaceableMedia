<h4>Kontaktieren</h4>
<div class="hr"></div>
<div class="divManager">
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
</div>
<h4>Anfrage abschicken</h4>
<div class="hr"></div>
<div id="contact">
    <form action="index.php?_ijt=5p6j4peep2pkf6m5kuh30i38v4#contact" method="post" enctype="multipart/form-data">
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

    //PHPWarning-Message will not be shown
    error_reporting(E_ERROR);

    include("database/dbCon.php");
    $con = new dbCon();

    $regexName = "/^[a-zA-Z\s\.]{1,50}+$/";
    $regexBetreff = "/^[a-zA-Z\s\d\-\+\#]{1,100}$/";
    $regexMessage = "/^[a-zA-Z\s\d\.]{1,500}+$/";

    $nachname = $_POST["nachname"];
    $vorname = $_POST["vorname"];
    $email = $_POST["email"];
    $betreff = $_POST["betreff"];
    $nachricht = $_POST["nachricht"];

    //Wird durchgeführt wenn Felder ausgefüllt sind
    if(isset($_POST["nachname"],$_POST["vorname"],$_POST["email"],$_POST["betreff"],$_POST["nachricht"] ))
    {
        if(preg_match($regexName,$_POST["nachname"]) && preg_match($regexName,$_POST["vorname"])
            && preg_match($regexBetreff,$_POST["betreff"]) && preg_match($regexMessage,$_POST["nachricht"]))
        {
            mysqli_query($con, "INSERT INTO contact (nachname,vorname,email,betreff,nachricht) VALUES ('$nachname','$vorname','$email','$betreff','$nachricht')");
            ?>
            <script type="text/javascript">
                window.alert("Anfrage wurde übermittelt!");
            </script>
            <?php

            error_reporting(E_ALL);
            ini_set("display_errors", "On");

            if(isset($_POST["submit"])){
                require_once "../libaries/swiftmailer/vendor/autoload.php";

                $transport = new Swift_SmtpTransport("smtp.gmail.com", 587, "tls");
                $transport->setUsername("fln.hansmann@gmail.com");
                $transport->setPassword("mvqktwkvoyvxxxzr");
                $transport->setEncryption("tls");

                $mail = new Swift_Mailer($transport);
                $message = new Swift_Message("Mein Betreff");
                $message->setFrom($_POST["email"]);
                $message->setTo(["felix-hh1887@hotmail.de"=>"Felix"]);
                $message->setSubject($_POST["betreff"]);
                $message->setBody($_POST["nachricht"]);

                $result = $mail->send($message);
            }
        }else
            {
                echo "Fehler bei der Eingabe";
            }
    }
?>
<?php
    include("files/fileUpload.php");
?>
