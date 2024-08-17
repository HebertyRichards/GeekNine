<?php

include 'conexao.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindValue(':email', $email);
    $result = $stmt->execute()->fetchArray(SQLITE3_ASSOC);

    if ($result && password_verify($senha, $result['senha'])) {
      $_SESSION['nome'] = $result['nome'];
       header("Location: index.php");
          exit();
      } else {
          $mensagem =  "Credenciais inválidas!";
      }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
    <title>Login</title>
  <link href="login.css" rel="stylesheet" type="text/css" />
  <link rel="website icon" type="png" href="imagens/file.png">
</head>
<body> 
  <div class="container">
  <div class="login">
    <h2>Login</h2>
   <img src="imagens/iconeLogin.png" alt="Geek Nine">
  <br></br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        E-mail: <input type="email" name="email" placeholder=" Digite seu E-mail" required><br></br>
        Senha: <input type="password" name="senha" placeholder=" Digite sua senha" required><br></br>
        <input type="submit" value="Logar">
    </form>
      <a href="index.php">
        <button>Início</button>
      </a>
      <br></br>
    <div id="mensagem">
    <?php
    if (!empty($mensagem)) {
        echo $mensagem;
    }
    ?>
      </div><br>
      <a href="cadastro.php">Não possui uma conta?<br>Cadastre-se!</a> 
    </div>
  </div>
</body>
</html>
