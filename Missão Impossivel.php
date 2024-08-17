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
  <title>Missão Impossível 7: Acerto de Contas Parte I</title>
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
    <img src="imagens/Missão Impossivel.png" alt="Missão Impossivel">
    <h1>Missão Impossível 7: <br> Acerto de Contas Parte I</h1>
  </div>
    <div class = "rating"> 
    <p> 2023 </p>
    <p> 2h, 43m </p>
      <a href="https://www.imdb.com/title/tt9603212/?ref_=nv_sr_srsg_6_tt_8_nm_0_q_miss%25C3%25A3o%2520impo">7.7/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Tom Cruise.png" alt="Tom Cruise">
      <span>Tom Cruise</span>    
        <img src="imagens/Hayley Atwell.png" alt="Hayley Atwell">
      <span>Hayley Atwell</span>
        <img src="imagens/Ving Rhames.png" alt="Ving Rhames">
      <span>Ving Rhames</span>
        <img src="imagens/Simon Pegg.png" alt="Simon Pegg">
      <span>Simon Pegg</span>
  </div>
  <div class="texto1">
    <p>Missão Impossível 7: Acerto de Contas Parte 1 é o sétimo capítulo da franquia de ação e espionagem iniciada em 1996, que acompanha o agente norte-americano Ethan Hunt (Tom Cruise) em missões altamente secretas e perigosas. Agora, no novo filme, Ethan e a equipe do IMF formada por Ilsa Faust (Rebecca Ferguson), Benji Dunn (Simon Pegg) e Luther Stickell (Ving Rhames) recebem outra importante missão: eles devem rastrear uma nova e aterrorizante arma que, se cair nas mãos erradas, pode representar uma ameaça para toda a humanidade. Com o controle do futuro e o destino de todo o mundo em jogo, a equipe precisa partir em uma corrida frenética e mortal ao redor do planeta. Além disso, Ethan ainda é confrontado por um novo inimigo misterioso e muito perigoso, e é forçado a aceitar que, para completar o desafio, nada pode importar mais do que a missão - nem mesmo sua própria vida.</p>
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
