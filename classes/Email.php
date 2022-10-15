<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;
    
    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

         // create a new object
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->SMTPDebug  = 0;
         $mail->Host = 'smtp.gmail.com';
         $mail->Port = 587;
         $mail->SMTPSecure = 'tls';
         $mail->SMTPAuth   = true;
         $mail->Username = "bravojhostin232001@gmail.com";
         $mail->Password = "jhkthhiiosamnwkk";
     
         $mail->setFrom('bravojhostin232001@gmail.com', 'WebStack');
         //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
         $mail->AddReplyTo('replyto@correoquesea.com','El de la réplica');
         $mail->addAddress($this->email, $this->nombre);
         $mail->Subject = 'Confirma tu Cuenta';

         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has Registrado Correctamente tu cuenta en WebTechnology; pero es necesario confirmarla</p>";
         $contenido .= "<p>Presiona aquí: <a href='https://webstack01.herokuapp.com/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";       
         $contenido .= "<p>Si tu no creaste esta cuenta; puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();

    }

    public function enviarInstrucciones() {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug  = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;
        $mail->Username = "bravojhostin232001@gmail.com";
        $mail->Password = "jhkthhiiosamnwkk";
    
        $mail->setFrom('bravojhostin232001@gmail.com', 'WebStack');
        //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
        $mail->AddReplyTo('replyto@correoquesea.com','El de la réplica');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Recuperar Cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href=<a href='https://webstack01.herokuapp.com/reestablecer?token=" . $this->token . "'>Reestablecer Password</a>";        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}