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
  <title>Zona de Risco</title>
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
    <img src="imagens/ZonadeRisco.png" alt="Zona de Risco">
    <h1>Zona de Risco</h1>
  </div>
      <div class = "rating"> 
      <p> 2024 </p>
      <p> 1h, 53m </p>
        <a href="https://www.imdb.com/title/tt19864802/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_zona%2520de%2520risco">6.5/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Liam Hemsworth.png" alt="Liam Hemsworth">
      <span>Liam Hemsworth</span>    
        <img src="imagens/Russell Crowe.png" alt="Russell Crowe">
      <span>Russell Crowe</span>
        <img src="imagens/Luke Hemsworth.png" alt="Luke Hemsworth">
      <span>Luke Hemsworth</span>
        <img src="imagens/Ricky Whittle.png" alt="Ricky Whittle">
      <span>Ricky Whittle</span>
  </div>
  <div class="texto1">
    <p>Em Land of Bad, um piloto de drone das Forças Aéreas é a única esperança de uma força-tarefa presa em uma emboscada. No thriller de ação, a missão de um esquadrão de operações especiais da Força Delta vira um grande desastre. Cercados pelo inimigo em um território remoto nas Filipinas, a única chance de resgate está nas mãos de Reaper (Russel Crowe), um piloto de drone, e Kinney (Liam Hemsworth), um jovem oficial da aeronáutica. Eles têm 48 horas para resgatar os soldados antes que vire um banho de sangue.</p>
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
