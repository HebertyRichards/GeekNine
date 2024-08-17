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
  <title>Quarteto Fantástico</title>
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
    <img src="imagens/Quarteto.png" alt="Quarteto Fantástico">
    <h1>Quarteto Fantástico</h1>
  </div>
    <div class = "rating"> 
    <p> 2005 </p>
    <p> 1h, 46m </p>
      <a href="https://www.imdb.com/title/tt0120667/?ref_=fn_al_tt_3">5.7/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Ioan Gruffudd.png" alt="Ioan Gruffudd">
      <span>Ioan Gruffudd</span>
        <img src="imagens/Jessica Alba.png" alt="Jessica Alba">
      <span>Jessica Alba</span>
        <img src="imagens/Chris Evans.png" alt="Chris Evans">
      <span>Chris Evans</span>
        <img src="imagens/Michael Chiklis.png" alt="Michael Chiklis">
      <span>Michael Chiklis</span>
  </div>
  <div class="texto1">
    <p>Em Quarteto Fantástico, um desastre atinge uma nave espacial, fazendo com que seus quatro tripulantes sofram modificações em seu organismo de forma a ganharem poderes especiais. Reed Richards (Ioan Gruffudd), o líder do grupo, passa a ter a capacidade de esticar seu corpo feito borracha. Sue Storm (Jessica Alba), sua ex-namorada, ganha poderes que a permitem ficar invisível e criar campos de força. Johnny Storm (Chris Evans), irmão de Sue, pode aumentar o calor do seu corpo, enquanto que Ben Grimm (Michael Chiklis) tem seu corpo transformado em pedra e ganha uma força sobre-humana. Ao retornar à Terra após o acidente logo os novos poderes começam a se manifestar, fazendo com que todos tenham que se adaptar a eles e também à condição de celebridades que os poderes lhes trazem.</p>
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
