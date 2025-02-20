<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<a href="chat.php"><button title="Chat Global">Chat Global</button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre</title>
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/png" href="imagens/file.png">
  <link href="sobre.css" rel="stylesheet" type="text/css" />
   <script defer src="script.js"></script>
    <link rel="website icon" type="png" href="imagens/file.png">
  </head>

    <body>
      <header>
        <img src="imagens/GeekTopo2.png" class="img-fluid" alt="GeekNine">
      </header>
      <div id="menu-container">
        <a id="inicio" href="index.php">Início</a>
        <a id="sobre" href="sobre.php">Sobre</a>
        <a id="games" href="games.php">Games</a>
        <a id="tecnologia" href="tecnologia.php">Tecnologia</a>
        <a id="filmes" href="filmes.php">Filmes</a>
        <a id="eventos" href="eventos.php">Eventos</a>
      </div>
      <div id="menu-container2">
        <div class="modo">
          <img src="imagens/GeekTopo2.png" class="img-fluid2" alt="GeekNine">
          <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a id="inicio2" href="index.php">Início</a>
          <a id="sobre2" href="sobre.php">Sobre</a>
          <a id="games2" href="games.php">Games</a>
          <a id="tecnologia2" href="tecnologia.php">Tecnologia</a>
          <a id="filmes2" href="filmes.php">Filmes</a>
          <a id="eventos2" href="eventos.php">Eventos</a>
        </div>
      </div>
  <div class="container-aa">
    <br>
    <br>
    <h1>Quem Somos</h1>
    <br>
    <br>
    <p>O Geeknine é uma página dedicada a fornecer notícias, análises e dicas sobre o mundo dos games e da tecnologia.<br>
  Nossa equipe é composta por entusiastas apaixonados por esses temas,<br> e nosso objetivo é compartilhar nosso
  conhecimento e entusiasmo com nossos leitores.</p>
    <br>
  </div>
  <div class="container-aa">
    <br>
    <h1>Nossa Equipe:</h1>
    <br>
    <br>
  </div>
  <div class="container-a" align="center"> <div class="filme-carousel">
      <a href= "https://www.instagram.com/wess2__/" target="_blank"><img src="imagens/wesley.jpeg"></a>
    
      <a href="https://www.instagram.com/leo_henriquefx/" target="_blank"><img src="imagens/leo.jpg"></a>
    
      <a href="https://www.instagram.com/valdimir_manuel1/" target="_blank"><img src="imagens/val.jpeg"></a>
    
      <a href="https://www.instagram.com/alex_souza13/" target="_blank"><img src="imagens/alex.jpeg"></a>
    
      <a href="https://www.instagram.com/eodenzel/" target="_blank"><img src="imagens/denzel.jpg"></a>
    
      <a href="https://www.instagram.com/heberyn.2k24/" target="_blank"><img src="imagens/heberty.jpeg"></a>
    
      <a href="https://www.instagram.com/levijupi/" target="_blank"><img src="imagens/legi.jpeg"></a>
    
      <a href="https://www.instagram.com/nanda_o_/" target="_blank"><img src="imagens/fernanda.jpg"></a>
      </div>
  </div>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.filme-carousel').slick({
            dots: false,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1,
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                }
              },
              {
              breakpoint: 500, 
              settings: {
                slidesToShow: 2, 
                slidesToScroll: 1,
              }
            }
            ]
          });
        });
      </script>
    <br></br>
    <br></br>
    <footer>
    <div class="contato">
      <div class="contato-1">
        <ul>
          <li id="h2">Contato</li>
          <li><img src="imagens/gmail.png" alt="Gmail">Geeknine@gmail.com</li>
          <li><img src="imagens/telefone.png" alt="Telefone">Telefone:(11) 0000-0000</li>
          <li><img src="imagens/whatsapp.png" alt="WhatsApp">Whatsapp: (11) 00000-0000</li>
        </ul>
      </div>
      <div class="redes-sociais">
        <a id="facebook" href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank"></a>
        <a id="instagram" href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank"></a>
        <a id="twitter" href="https://twitter.com/GeekNine9" target="_blank"></a>
      </div>
    </div>
  <div class="logo">
  <p>GeekNine © 2024 Todos os Direitos Reservados</p>
  </div>
  </footer>
</body>

</html>