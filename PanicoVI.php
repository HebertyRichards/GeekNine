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
  <title>Pânico VI</title>
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
    <img src="imagens/PanicoVI.png" alt="Panico VI">
    <h1>Pânico VI</h1>
  </div>
    <div class = "rating"> 
    <p> 2023 </p>
    <p> 2h, 2m </p>
      <a href="https://www.imdb.com/title/tt17663992/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_panico%2520vi">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Melissa Barrera.png" alt="Melissa Barrera">
      <span>Melissa Barrera</span>    
        <img src="imagens/Jenna Ortega.png" alt="Jenna Ortega">
      <span>Jenna Ortega</span>
        <img src="imagens/Jasmin Savoy Brown.png" alt="Jasmin Savoy Brown">
      <span>Jasmin Savoy Brown</span>
        <img src="imagens/Mason Gooding.png" alt="Mason Gooding">
      <span>Mason Gooding</span>
  </div>
  <div class="texto1">
    <p>Sam (Melissa Barrera), Tara (Jenna Ortega), Mindy (Jasmin Savoy Brown) e Chad (Mason Gooding) estão fartos. Depois de sobreviver ao massacre final de Ghostface em Woodsboro, os quatro se mudam sem cerimônia para Nova York. Lá, os dois irmãos querem começar uma nova vida, por assim dizer, e deixar a pequena cidade e suas experiências traumáticas para trás. Mas o maldito assassino com uma máscara de fantasma e uma lâmina afiada não pode ser abalado tão facilmente, porque de repente ele também aparece na Big Apple. Na rua, no metrô, no supermercado – aparentemente em todos os lugares ele aproveita a agitação da cidade grande para desaparecer na multidão com a mesma rapidez com que apareceu antes. E embora Sam, Tara, Mindy e Chad já tenham conhecido o assassino, desta vez eles não podem confiar em sua experiência. Porque quem está por trás da máscara tem novos truques na manga.</p>
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
