<?php

    $to = 'marcelo1999.mesquita@gmail.com';
    
    $name = $_REQUEST["nome"];
    $email= $_REQUEST["email"];
    $text = $_REQUEST["mensagem"];
    $subject= $_REQUEST["assunto"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$subject.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Assunto: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>

    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Enviado Com Sucesso.';
    }else{
        echo 'Falha';
    }