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
          <title>Invasão a Casa Branca</title>
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
    <img src="imagens/Casa Branca.png" alt="Casa Branca">
    <div class="title">
    <h1>Invasão a Casa Branca </h1>
    <div class = "mdb"> 
    <p> 2013 </p>
    <p> 1h, 59m </p>
      <a href="https://www.imdb.com/title/tt2302755/?ref_=nv_sr_srsg_0_tt_7_nm_0_q_invas%25C3%25A3o%2520a%2520casa%2520branca">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Gerard Butler.png" alt="Gerard Butler">
      <span>Gerard Butler</span>
        <img src="imagens/Aaron Eckhart.png" alt="Aaron Eckhart">
      <span>Aaron Eckhart</span>
        <img src="imagens/Finley Jacobsen.png" alt="Finley JacobsenIsabela Merced">
      <span>Finley Jacobsen</span>
        <img src="imagens/Dylan McDermott.png" alt="Dylan McDermott">
      <span>Dylan McDermott</span>
  </div>
  <div class="texto1">
    <p>
    Mike Banning (Gerard Butler) é um dedicado funcionário do serviço secreto americano, que tem por função proteger o presidente Benjamin Asher (Aaron Eckhart) e sua família. Ao levá-los para uma festa de Natal, uma intensa nevasca faz com que o carro em que estão o presidente e sua esposa, Margaret (Ashley Judd), sofra um acidente. Mike consegue salvar Benjamin, mas a primeira-dama morre. A partir de então, Mike é deslocado para um serviço burocrático de escritório em Washington, que ele detesta. Dezoito meses depois, a Casa Branca é atacada por terroristas norte-coreanos. Percebendo o pânico na população e o perigo que o presidente corre, Mike segue para a Casa Branca para ajudar no que pode. Com toda a equipe de segurança local dizimada, ele se torna a única esperança dentro da Casa Branca para combater os terroristas e salvar o presidente.
</p>
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
