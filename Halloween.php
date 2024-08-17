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
  <title>Halloween Ends: O Acerto de Contas Final</title>
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
    <img src="imagens/Halloween.png" alt="Halloween Ends: O Acerto de Contas Final">
    <h1>Halloween Ends: O Acerto de Contas Final</h1>
  </div>
    <p>2022</p>
    <p>1h, 51m</p>
    <div class = "rating"> 
      <a href="https://www.imdb.com/title/tt10665342/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_halloween%2520ends">5.0/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Jamie Lee Curtis.png"  alt="Jamie Lee Curtis">
      <span>Jamie Lee Curtis</span>
        <img src="imagens/Andi Matichak.png"  alt="Andi Matichak">
      <span>Andi Matichak</span>
        <img src="imagens/Will Patton.png"  alt="Will Patton">
      <span>Will Patton</span>
        <img src="imagens/Kyle Richards.png"  alt="Kyle Richards">
      <span>Kyle Richards</span>
  </div>
  <div class="texto1">
    <p>Em Halloween Ends, quatro anos após os eventos de Halloween Kills: O Terror Continua (2021), Laurie (Jamie Lee Curtis) agora vive com sua neta Allyson e está terminando seu livro de memórias. Michael Myers nunca mais foi visto. Depois de permitir que a sombra de Michael pairasse ao longo de sua existência por décadas, ela finalmente decidiu se libertar do medo e da raiva e se voltar para a vida. Mas quando um jovem, Corey Cunningham, é acusado de ter assassinado um menino de quem cuidava, uma onda de terror e violência pairam sobre a cidade, forçando Laurie a se juntar com outras pessoas para combater o mal. Mas dessa vez, Laurie terá de lidar com Myers e acabar com ele, de uma vez por todas, para que o mal nunca mais volte para a cidade e ela possa, enfim, ter uma vida normal e sem medo, promovendo a paz para sempre.</p>
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
