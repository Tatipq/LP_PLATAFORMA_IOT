<?php
    $para = "wanderson.lopes@ibti.org.br";
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['subject'];
    $assunto = $_POST['assunto'];
    $mensagem = "<strong>Nome: </strong>".$nome;
    $mensagem .= "<strong>Email: </strong>".$email;
    $mensagem .="<br> <strong> Mensagem: </strong>".$_POST['message'];
    $port = 465;

    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  plataforma.ibti.org.br<smtp.gmail.com>\n";
    $headers .= "X-Sender:  <smtp.gmail.com>\n";
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <arley.souto@hotmail.com>\n";
    $headers .= "MIME-Version: 1.0\n";

    if (!mail($para, $assunto, $mensagem, $headers, $port)){
        echo "Erro ao enviar";
    } else{
        echo "Email enviado com sucesso";
    }
?>