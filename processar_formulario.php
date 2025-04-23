<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\teste_formulario_contato\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\teste_formulario_contato\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\teste_formulario_contato\PHPMailer-master\src\SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $destino = "carol.dev.teste@gmail.com";

    $assunto = "Formulário de Contato";

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'XXXXXXXXXXXXXXXXXXXXXXXX'; 
        $mail->Password = 'XXXXXXXXXXXXXXXXXXX'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; 
        
        $mail->setFrom($email, $nome);
        $mail->addAddress($destino);
        $mail->Subject = $assunto;
        $mail->Body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem";

        $mail->send();
        print "Seu cadastro foi enviado com sucesso!";
    } catch (Exception $e) {
        print "Houve um erro ao enviar o cadastro. Por favor, tente novamente. Detalhes do erro: {$mail->ErrorInfo}";
    }
} elseif ($_SERVER['REQUEST_METHOD']== "GET") {
        print "Método errado";
    }
?>
