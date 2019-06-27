<?php

/* verifica campos vazios */
if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['mensagem']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}
/* criaria a mensagme de email */
$nome = strip_tags(htmlspecialchars($_POST['nome']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$telefone = strip_tags(htmlspecialchars($_POST['telefone']));
$mensagem = strip_tags(htmlspecialchars($_POST['mensagem']));

$to = "thaci.cschott@gmail.com"; 
$subject = "Website Contact Form:  $nome";
$body = "Você recebeu uma mensagem do seu website!.\n\n"."Aqui estão os detalhes:\n\nNome: $nome\n\nEmail: $email\n\ntelefone: $telefone\n\nMensagem:\n$mensagem";
$header = "email remetente"; 
$header .= "Reply-To: $email";	
if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
