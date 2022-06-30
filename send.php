<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';

$styleSend = "text-align: center;position: relative;width: 80vh;margin-left: auto;margin-right: auto;color: white;font-family: 'Poppins Semi Bold';font-size: 12;padding: 1rem;background-color: #007f56;left: 0rem;border-radius: 10px;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;";
$styleError = "text-align: center;position: relative;width: 80vh;margin-left: auto;margin-right: auto;color: white;font-family: 'Poppins Semi Bold';font-size: 12;padding: 1rem;background-color: #981d1d;left: 0rem;border-radius: 10px;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;";

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['text']) && isset($_POST['product']) && isset($_POST['format'])){
    //PRODUCTOS

    $name = 'Nombre: '. $_POST['name'].'<br/>';
    $email = 'Correo Electronico: '. $_POST['email'].'<br/>';
    $phone = 'Telefono: '.$_POST['phone'].'<br/>';
    $text = 'Mensaje: '.$_POST['text'].'<br/>';

    $product = '<br/>Nombre del producto: '. $_POST['product'].'<br/>';
    $meters = 'Metros: '. $_POST['meters'].'<br/>';
    $use = 'Uso: '.$_POST['use'].'<br/>';
    $finish = 'Acabado: '.$_POST['finish'].'<br/>';
    $format = 'Formato: '. $_POST['format'].'<br/>';
    $meterBox = 'Metros por caja: '. $_POST['meterBox'].'<br/>';
    $color = 'Color: '.$_POST['color'].'<br/>';
    $brand = 'Marca: '.$_POST['brand'].'<br/>';
    $ref = 'Referencia: '. $_POST['ref'].'<br/>';
    
    $mail = new PHPMailer;

    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.office365.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'danielfelipeg405@hotmail.com'; //SMTP username
        $mail->Password = 'Danielgz405'; //SMTP password
        $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('danielfelipeg405@hotmail.com', 'name');
        $mail->addAddress('danielfelipeg45@gmail.com', 'destnation name'); //Add a recipient
        $mail->addAddress('desarrollo.mainht@gmail.com'); //Name is optional
        $mail->addReplyTo('dfgonzalez@uniempresarial.edu.co', 'Information');
        $mail->addCC('dfgonzalez@uniempresarial.edu.co');

        $mail->isHTML(true);  //Set email format to HTML
        $mail->Subject = $_POST['name'].' Quiere solicitar un producto';
        $mail->Body    = $name.$email.$phone.$text.'<br/> Caracteristicas del producto solicitado <br/>'.$product.$meters.$use.$finish.$meterBox.$color.$brand.$ref;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<div style="'.$styleSend.'"><p>Message has been sent</p></div>';
    } catch (Exception $e) {
        echo '<div style="'.$styleError.'" ><p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p></div>';
    }
}else if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['text']) && isset($_POST['servise']) && isset($_POST['descrip']) && isset($_POST['price'])){
    //SERVICIOS
    $name = 'Nombre: '. $_POST['name'].'<br/>';
    $email = 'Correo Electronico: '. $_POST['email'].'<br/>';
    $phone = 'Telefono: '.$_POST['phone'].'<br/>';
    $text = 'Mensaje: '.$_POST['text'].'<br/>';

    $service = '<br/>Nombre del servicio: '. $_POST['servise'].'<br/>';
    $description = 'Descripcion: '. $_POST['descrip'].'<br/>';
    $price = 'Precio: '.$_POST['price'].'<br/>';
    
    $mail = new PHPMailer;

    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.office365.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'danielfelipeg405@hotmail.com'; //SMTP username
        $mail->Password = 'Danielgz405'; //SMTP password
        $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('danielfelipeg405@hotmail.com', 'name');
        $mail->addAddress('danielfelipeg45@gmail.com', 'destnation name'); //Add a recipient
        $mail->addAddress('desarrollo.mainht@gmail.com'); //Name is optional
        $mail->addReplyTo('dfgonzalez@uniempresarial.edu.co', 'Information');
        $mail->addCC('dfgonzalez@uniempresarial.edu.co');

        $mail->isHTML(true);  //Set email format to HTML
        $mail->Subject = $_POST['name'].' Quiere solicitar un servicio';
        $mail->Body    = $name.$email.$phone.$text.'<br/> Caracteristicas del servicio solicitado <br/>'.$service.$description.$price;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<div style="'.$styleSend.'"><p>Message has been sent</p></div>';
    } catch (Exception $e) {
        echo '<div style="'.$styleError.'" ><p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p></div>';
    }
}else if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['text'])){
    //DEFAULT
    $name = 'Nombre: '. $_POST['name'].'<br/>';
    $email = 'Correo Electronico: '. $_POST['email'].'<br/>';
    $phone = 'Telefono: '.$_POST['phone'].'<br/>';
    $text = 'Mensaje: '.$_POST['text'].'<br/>';
    
    $mail = new PHPMailer;

    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.office365.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'danielfelipeg405@hotmail.com'; //SMTP username
        $mail->Password = 'Danielgz405'; //SMTP password
        $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('danielfelipeg405@hotmail.com', 'name');
        $mail->addAddress('danielfelipeg45@gmail.com', 'destnation name'); //Add a recipient
        $mail->addAddress('desarrollo.mainht@gmail.com'); //Name is optional
        $mail->addReplyTo('dfgonzalez@uniempresarial.edu.co', 'Information');
        $mail->addCC('dfgonzalez@uniempresarial.edu.co');

        $mail->isHTML(true);  //Set email format to HTML
        $mail->Subject = $_POST['name'].' Quiere contactarse contigo';
        $mail->Body    = $name.$email.$phone.$text;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<div style="'.$styleSend.'"><p>Message has been sent</p></div>';
    } catch (Exception $e) {
        echo '<div style="'.$styleError.'" ><p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p></div>';
    }
}else{
    //ERROR: NO EXISTE LA SOLICITUD
    echo '<div style="'.$styleError.'" ><p>Message could not be sent. Mailer Error: 404 Not found';
}