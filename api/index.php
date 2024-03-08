<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
</head>
<body>
  <h1>Contato</h1>
  <form action="enviar.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br>
    <button type="submit">Enviar</button>
  </form>
  
  <?php
  if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status === 'success') {
      echo "<p style='color: green'>Mensagem enviada com sucesso!</p>";
    } else if ($status === 'error') {
      echo "<p style='color: red'>Erro ao enviar mensagem. Tente novamente.</p>";
    }
  }
  ?>
  <?php
// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Validação (opcional)
// ... (verifique se os dados estão preenchidos corretamente)

// Monta o corpo do email
$corpo = "Nome: $nome\n";
$corpo .= "E-mail: $email\n\n";
$corpo .= "Mensagem:\n$mensagem";

// Envia o email (precisa configurar o servidor)
$destinatario = "seu_email@exemplo.com";
$assunto = "Contato pelo formulário";
$headers = "From: $email\r\n";
$resultado = mail($destinatario, $assunto, $corpo, $headers);

// Redireciona para a página index com o status da mensagem
if ($resultado) {
  header("Location: index.php?status=success");
} else {
  header("Location: index.php?status=error");
}
?>
<?php
// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Validação (opcional)
// ... (verifique se os dados estão preenchidos corretamente)

// Monta o corpo do email
$corpo = "Nome: $nome\n";
$corpo .= "E-mail: $email\n\n";
$corpo .= "Mensagem:\n$mensagem";

// Envia o email (precisa configurar o servidor)
$destinatario = "seu_email@exemplo.com";
$assunto = "Contato pelo formulário";
$headers = "From: $email\r\n";
$resultado = mail($destinatario, $assunto, $corpo, $headers);

// Redireciona para a página index com o status da mensagem
if ($resultado) {
  header("Location: index.php?status=success");
} else {
  header("Location: index.php?status=error");
}
?>

</body>
</html>
