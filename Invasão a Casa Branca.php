<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<button title="Usuario"></button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invasão a Casa Branca</title>
   <link href="games1.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="imagens/file.png">
  </head>

  <body>
    <header>
      <img src="imagens/GeekTopo2.png" class="img-fluid">
    </header>

    <div class="menu-container">
      <a href="index.php"><button title="Início">Início</button></a>
      <a href="sobre.php"><button title="Sobre">Sobre</button></a>
      <a href="games.php"><button title="Games">Games</button></a>
      <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
      <a href="filmes.php"><button title="Filmes">Filmes</button></a>
      <a href="eventos.php"><button title="Eventos">Eventos</button></a>
    </div>
    <br><br><br><br>
  <div class="container-a">
  <div class="div1">
    <img src="imagens/Casa Branca.png" alt="Casa Branca">
    <h1>Invasão a Casa Branca </h1>
  </div>
    <div class = "rating"> 
    <p> 2013 </p>
    <p> 1h, 59m </p>
      <a href="https://www.imdb.com/title/tt2302755/?ref_=nv_sr_srsg_0_tt_7_nm_0_q_invas%25C3%25A3o%2520a%2520casa%2520branca">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Gerard Butler.png" alt="Gerard Butler">
      <span>Gerard Butler</span>
        <img src="imagens/Aaron Eckhart.png" alt="Aaron Eckhart">
      <span>Aaron Eckhart</span>
        <img src="imagens/Finley Jacobsen.png" alt="Finley JacobsenIsabela Merced">
      <span>Finley Jacobsen</span>
        <img src="imagens/Dylan McDermott.png" alt="Dylan McDermott">
      <span>Dylan McDermott</span>
  </div>
  <div class="texto1">
    <p>
    Mike Banning (Gerard Butler) é um dedicado funcionário do serviço secreto americano, que tem por função proteger o presidente Benjamin Asher (Aaron Eckhart) e sua família. Ao levá-los para uma festa de Natal, uma intensa nevasca faz com que o carro em que estão o presidente e sua esposa, Margaret (Ashley Judd), sofra um acidente. Mike consegue salvar Benjamin, mas a primeira-dama morre. A partir de então, Mike é deslocado para um serviço burocrático de escritório em Washington, que ele detesta. Dezoito meses depois, a Casa Branca é atacada por terroristas norte-coreanos. Percebendo o pânico na população e o perigo que o presidente corre, Mike segue para a Casa Branca para ajudar no que pode. Com toda a equipe de segurança local dizimada, ele se torna a única esperança dentro da Casa Branca para combater os terroristas e salvar o presidente.
</p>
  </div>
  
  </div>  
    <footer>
      <div class="contato">
        <div class="contato-1">
          <ul><h1>Contato</h1>
        <li><img src="imagens/gmail.png">Geeknine@gmail.com</li>
        <li><img src="imagens/telefone.png">Telefone:(11) 0000-0000</li>
        <li><img src="imagens/whatsapp.png">Whatsapp: (11) 00000-0000</li>
      </ul>
      </div>
    <div class="redes-sociais"> 
      <a href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank"><button
          title="Facebook">Facebook</button></a>
      <a href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank"><button
          title="Instagram">Instagram</button></a>
      <a href="https://twitter.com/GeekNine9" target="_blank"><button title="Twitter">Twitter</button></a>
    </div>
    </div>
    <div class="logo">
    <p>GeekNine © 2024 Todos os Direitos Reservados</p>
    </div>
    </footer>
</body>

</html>
