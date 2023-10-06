<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes ($_POST['email']);
    $telefone = addslashes ($_POST['telefone']);
    $mensagem = addslashes ($_POST['mensagem']);

    $destinatario = "thaisnandalopes@gmail.com";
    $assunto = "Coleta de dados - Portfólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Tefelone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: teste@dominio.com"."\n"."reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($para,$assunto,$corpo,$cabecalho)){
        echo("E-mail enviado com sucesso.");
    }else{
        echo("Houve uma erro ao enviar o e-mail.");
    }

    ?>