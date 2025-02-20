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
      <title>A freira</title>
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
      <img src="imagens/A Freira 2.png" alt="A Freira">
      <div class="title">
      <h1>A Freira II</h1>
    <div class="mdb">
      <p>2023</p>
      <p>1h, 50m</p> 
      <a href="https://www.imdb.com/title/tt10160976/?ref_=fn_al_tt_1">5.6/10</a> 
    </div>
    <div class="elenco">
      <img src="imagens/Taissa Farmiga.png">
      <span>Taissa Farmiga</span>
      <img src="imagens/Jonas Bloquet.png" alt="Jonas Bloquet">
      <span>Jonas Bloquet</span>
      <img src="imagens/Storm Reid.png" alt="Storm Reid">
      <span>Storm Reid</span>
      <img src="imagens/Anna Popplewell.png" alt="Anna Popplewell"> 
      <span>Anna Popplewell</span>
    </div>
    <div class="texto1">
      <p>A Freira 2 é o segundo capítulo da história de A Freira (2018), que faz parte do universo da franquia Invocação do Mal. No primeiro filme, após uma freira cometer suicídio em um convento na Romênia, o Vaticano envia o atormentado Padre Burke (Demián Bichir) e uma noviça, Irmã Irene (Taissa Farmiga), para investigar o ocorrido. Arriscando suas vidas, a fé e até suas almas, os dois descobrem um segredo profano no local, confrontando uma força do mal que assume a forma de uma freira demoníaca e transforma o convento em um campo de batalha espiritual. Agora, na continuação, anos após os acontecimentos do primeiro filme, um padre é assassinado e parece que o mal está se espalhando por toda a região. Novamente acompanhamos a Irmã Irene quando, após pensar ter escapado por pouco de Valak, a entidade demoníaca, ela é forçada a enfrentar o poderoso e macabro inimigo mais uma vez.</p>
    </div>
  </div>
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
