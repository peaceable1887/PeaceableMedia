<?php
/*error_reporting(E_ALL);
ini_set("display_errors", "On");
    if(isset($_POST["submit"])){
    require_once "../libaries/swiftmailer/vendor/autoload.php";

    $transport = new Swift_SmtpTransport("smtp.gmail.com", 587, "tls");
    $transport->setUsername("fln.hansmann@gmail.com");
    $transport->setPassword("mvqktwkvoyvxxxzr");

    $mail = new Swift_Mailer($transport);
    $transport->setEncryption("tls");
    $message = new Swift_Message("Mein Betreff");
    $message->setFrom(["testSeite@foo.bar"]);
    $message->setTo(["felix-hh1887@hotmail.de"=>"Felix"]);
    $message->setSubject($_POST["betreff"]);
    $message->setBody($_POST["msg"]);

    $result = $mail->send($message);
    if($result)
    {
        echo "Mail wurde versendet";
        die();
    }else{
        echo "Mail wurde nicht versendet";
    }
}

function encrypt($plaintext) {
    $method = "AES-256-CBC";
    $key = hash('sha256',true);
    $iv = openssl_random_pseudo_bytes(16);

    $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
    $hash = hash_hmac('sha256', $ciphertext . $iv, $key, true);

    return base64_encode($iv . $hash . $ciphertext);
}

function decrypt($encryptedText, $password) {
    $encryptedText = base64_decode($encryptedText);

    $method = "AES-256-CBC";
    $iv = substr($encryptedText, 0, 16);
    $hash = substr($encryptedText, 16, 32);
    $ciphertext = substr($encryptedText, 48);
    $key = hash('sha256', $password, true);

    if (!hash_equals(hash_hmac('sha256', $ciphertext . $iv, $key, true), $hash)) return null;

    return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if(isset($_POST["submit"]))
    {
        $mail = new PHPMailer(true);
        try{
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "fln.hansmann@gmail.com";
            $mail->Password = "mvqktwkvoyvxxxzr";
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;

            $mail->setFrom("fln.hansmann@gmail.com", "Testmail");
            $mail->addAddress("felix-hh1887@hotmail.de","Testmail");
            $mail->addAttachment("../files/csv/test.csv");

            $mail->isHTML(true);
            $mail->Subject = "Test";
            $mail->Body = $_POST["msg"];
            $mail->sign(
                'cert.crt',
                'cert.key',
                'password',
                'certchain.pem'
            );

            $mail->send();
            echo "Nachricht wurde gesendet!";
       }catch(Exception $e){
             echo "Nachricht konnte nicht gesendet werden. Fehler: {$mail->ErrorInfo}";
       }
    }*/
?>
<h4>Mail versenden Test</h4>
<form action="index.php?_ijt=ueber_mich" method="post">
    <textarea rows="7" name="msg" placeholder="Nachricht"></textarea> <br>
    <button name="submit" type="submit">Jetzt abschicken</button>
</form>
<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../libaries/phpmailer/vendor/autoload.php';

if(isset($_POST["submit"])) {

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "fln.hansmann@gmail.com";
    $mail->Password = "mvqktwkvoyvxxxzr";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("fln.hansmann@gmail.com", "Testmail");
    $mail->addAddress("felix-hh1887@hotmail.de","Testmail");
    $mail->isHTML(true);
    $mail->Subject = "Test";
    $mail->Body = $_POST["msg"];

    $mail->addAttachment("../files/csv/test.csv");

    $mail->sign(
        '/path/to/cert.crt', //The location of your certificate file
        '/path/to/cert.key', //The location of your private key file
        //The password you protected your private key with (not the Import Password!
        //May be empty but the parameter must not be omitted!
        'yourSecretPrivateKeyPassword',
        '/path/to/certchain.pem' //The location of your chain file
    );

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}

?>

<h4>Über Mich</h4>
<div class="hr"></div>
<div class="divManager">
<div class="textAboutMe">
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,<br>
    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<br>
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
    At vero eos et accusam et justo duo dolores et ea rebum.<br>
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    <br>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,<br>
        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<br>
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
        At vero eos et accusam et justo duo dolores et ea rebum.<br>
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    <br>
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