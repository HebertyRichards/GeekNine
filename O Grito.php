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
  <title>O Grito III: O Ínicio do Fim</title>
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
    <img src="imagens/Grito.png" alt="O Grito">
    <h1>O Grito III: <br> O Ínicio do Fim</h1>
  </div>
    <div class = "rating"> 
    <p> 2009 </p>
    <p> 1h, 30m </p>
      <a href="https://www.imdb.com/title/tt1053859/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_o%2520grito%25203">4.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Nozomi Sasaki.png"  alt="Nozomi Sasaki">
      <span>Nozomi Sasaki</span>
        <img src="imagens/Reina Triendl.png"  alt="Reina Triendl">
      <span>Reina Triendl</span>
        <img src="imagens/Sho Aoyagi.png"  alt="Sho Aoyagi">
      <span>Sho Aoyagi</span>
        <img src="imagens/Miho Kanazawa.png"  alt="Miho Kanazawa">
      <span>Miho Kanazawa</span>
  </div>
  <div class="texto1">
    <p>Em uma casa em Tóquio que esconde uma terrível maldição. Quando alguém morre em um momento de terror na casa, uma maldição é desencadeada, levando à morte de outras pessoas devido a uma poderosa ira. Karen Davis, uma estudante americana em intercâmbio no Japão, se voluntaria para cuidar de uma mulher na casa amaldiçoada, sem saber da maldição. Conforme mais pessoas morrem, Karen descobre o segredo por trás da maldição e tenta detê-la antes que seja tarde demais, mas enfrenta uma força maléfica que ela ainda não compreende totalmente.</p>
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
