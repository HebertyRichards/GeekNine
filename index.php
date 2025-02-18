<?php
$db = new SQlite3('messages.sqlite');
$query = "CREATE TABLE IF NOT EXISTS messages (
id INTEGER PRIMARY KEY AUTOINCREMENT,
 username TEXT,
 message TEXT, 
timestamp TEXT)";
$db->exec($query);
?>
<?php
$db = new SQLite3('usuarios.sqlite');

$query = "CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    email TEXT UNIQUE,
    senha TEXT
)";
$db->exec($query);
?>
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
  <title>GeekNine</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
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
  <div class="novi">
    <h1>NOVIDADES</h1>
  </div>
  <div class="novi-container">
  <div class="games-events">
    <p>GAMES</p>
    <a href="games.php">
      <img src="imagens/games1.png" alt="games" title="Games"></a>
  </div>
    <div class="tec-events">
      <p>TECNOLOGIA</p>
    <a href="tecnologia.php">
      <img src="imagens/tecnologia1.png" alt="tecnologia" title="Tecnologia"></a>
    </div>
      <div class="filmes-events">
        <p>FILMES</p>
    <a href="filmes.php">
      <img src="imagens/filmes1.png" alt="músicas" title="Músicas"></a>
      </div>
    <div class="eventos-events">
      <p>EVENTOS</p>
    <a href="eventos.php">
      <img src="imagens/eventos1.png" alt="eventos" title="Eventos"></a>
    </div>
  </div>
  <br><br>
  <br><br>
  <br><br>
  <div class="geeksobre">
    <br><br>
    <h2>GEEKNINE</h2>
    <br><br><br>
    <p>Com informações atualizadas diariamente,</p>
    <p>o GeekNine é uma das melhores fontes </p>
    <p>para conferir seus filmes, games, notícias</p>
    <p>do mundo da tecnologia e eventos Geek!</p>
    <br><br><br><br>
  </div>
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