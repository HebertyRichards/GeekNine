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
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O Zelador Animal</title>
   <link href="games1.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="imagens/file.png"> 
  <script defer src="script.js"></script>
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
  <div class="container-a">
    <div class="div1">
    <img src="imagens/O Zelador Animal.png" alt="O Zelador Animal">
      <div class="title">
    <h1>O Zelador Animal</h1>
      <div class = "mdb"> 
      <p> 2011 </p>
      <p> 1h, 42m </p>
        <a href="https://www.imdb.com/title/tt1222817/?ref_=nv_sr_srsg_0_tt_1_nm_0_q_zelador%2520animal">5.2/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Kevin James.png" alt="Kevin James">
      <span>Kevin James</span>    
        <img src="imagens/Rosario Dawson.png" alt="Rosario Dawson">
      <span>Rosario Dawson</span>
        <img src="imagens/Sylvester Stallone.png" alt="Sylvester Stallone">
      <span>Sylvester Stallone</span>
        <img src="imagens/Nick Nolte.png" alt="Nick Nolte">
      <span>Nick Nolte</span>
  </div>
  <div class="texto1">
    <p>Griffin Keyes (Kevin James) trabalhava feliz como zelador de um jardim zoológico. Para ele, nada era mais normal do que conviver com leões, elefantes, girafas, ursos e gorilas. Sua história começa a mudar quando leva um fora de sua namorada Stephanie (Leslie Bibb) por ela não se conformar com a falta de ambição dele. Certos de que o boa praça deveria ter uma segunda chance com as mulheres, a bicharada resolve dar uma de conselheiros amorosos e começam a "falar" com ele, quebrando o código de silêncio que existia. Após o susto inicial, ele começa a adotar algumas dicas animais e o resultado acaba sendo positivo. A única coisa que eles não contavam era que a megera iria afastar o grande amigo do zoológico para dar vazão ao seu mundo de futlidades e falsidades. É quando chega a hora de Griffin acordar e descobrir o verdadeiro sentido das palavras amor e amizade.</p>
  </div>
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
