<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    
    $stmt = $db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $result = $stmt->execute();

  if($result){
   $mensagem = 'Cadastro realizado com sucesso!';
  }else {
    $mensagem = "Erro ao cadastrar usuário";
  }

  
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
    <title>Cadastro</title>
  <link href="cadastro.css" rel="stylesheet" type="text/css" />
  <link rel="website icon" type="png" href="imagens/file.png">
</head>
<body>
  <div class="container">
    <div class="cadastro">
    <h2>Cadastro</h2>
  <img src="imagens/iconeLogin.png" alt="Geek Nine">
  <br></br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome: <input type="text" name="nome" placeholder=" Digite seu Nome" required><br></br>
        E-mail: <input type="email" name="email" placeholder=" Digite seu E-mail" required><br></br>
        Senha: <input type="password" name="senha" placeholder=" Digite sua Senha" required><br></br>
        <input type="submit" value="Cadastrar"> 
      <br></br> 
      <div id="mensagem">
      <?php
      if (!empty($mensagem)) {
          echo $mensagem;
      }
      ?>
        </div><br>
      <a href="login.php">Já possui uma conta?<br>Faça login</a> 
    </form>
    <a href="index.php">
      <button>Início</button>
    </a>
    </div>
  </div>
</body>
</html>