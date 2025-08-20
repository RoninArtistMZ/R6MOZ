<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $nome    = $_POST['nome'] ?? '';
  $assunto = $_POST['assunto'] ?? '';
  $mensagem = $_POST['mensagem'] ?? '';

  // Para onde vai o email
  $to = "milsonneto30@gmail.com";               

  $subject = "Mensagem do Website: " . $assunto;

  // Corpo do email
  $body = "Nome: $nome\n\nMensagem:\n$mensagem";

  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: <$to>" . "\r\n";

  // Envia
  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
