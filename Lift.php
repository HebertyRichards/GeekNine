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
  <title>Lift: Roubo nas Alturas</title>
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
    <img src="imagens/Lift.png" alt="Lift">
    <h1>Lift: Roubo nas Alturas</h1>
  </div>
    <div class = "rating"> 
    <p> 2024 </p>
    <p> 1h, 47m </p>
      <a href="https://www.imdb.com/title/tt14371878/?ref_=fn_al_tt_1">5.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Kevin Hart.png" alt="Kevin HartDakota Johnson">
      <span>Kevin Hart</span> 
        <img src="imagens/Gugu Mbatha-Raw.png" alt="Gugu Mbatha-Raw">
      <span>Gugu Mbatha-Raw</span>
        <img src="imagens/Vincent D'Onofrio.png" alt="Vincent D'Onofrio">
      <span>Vincent D'Onofrio</span>
        <img src="imagens/Úrsula Corberó.png" alt="Úrsula Corberó">
      <span>Úrsula Corberó</span>
  </div>
  <div class="texto1">
    <p>Lift: Roubo nas Alturas é um filme norte-americano de ação e comédia policial dirigido por F. Gary Gray (A Negociação, Até as Últimas Consequências) para a Netflix. A produção segue um grupo de criminosos internacionais liderado por Cyrus (Kevin Hart) e contratados por sua ex-namorada, Abby (Gugu Mbatha-Raw), uma agente federal, para que cumpram uma missão ambiciosa: roubar meio bilhão de dólares em barras de ouro que estão sendo transportadas para uma célula terrorista. Para deixar tudo ainda mais insano, a carga está sendo transportada em um Boeing 777 que parte de Londres rumo a Zurique, e eles devem roubá-la em pleno vôo.</p>
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
