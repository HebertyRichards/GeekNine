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
  <title>Norbit</title>
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
    <img src="imagens/Norbit.png" alt="Norbit">
    <div class="title">
    <h1>Norbit</h1>
    <div class = "mdb"> 
    <p> 2007 </p>
    <p> 1h, 43m </p>
      <a href="https://www.imdb.com/title/tt0477051/?ref_=nv_sr_srsg_0_tt_5_nm_3_q_norbit">4.2/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Eddie Murphy.png" alt="Eddie Murphy">
      <span>Eddie Murphy</span>
        <img src="imagens/Thandie Newton.png" alt="Thandie Newton">
      <span>Thandie Newton</span>
        <img src="imagens/Terry Crews.png" alt="Terry Crews">
      <span>Terry Crews</span>
        <img src="imagens/Clifton Powell.png" alt="Clifton Powell">
      <span>Clifton Powell</span>
  </div>
  <div class="texto1">
    <p>Norbit (Eddie Murphy) foi criado pelo sr. Wong (Eddie Murphy), que o encontrou ainda bebê no Restaurante e Orfanato Wonton Dourado. Foi neste local que ele conheceu sua alma gêmea, Kate (Thandie Newton). Eles se tornam amigos inseparáveis, até ela ser adotada e deixar o local. Aos 9 anos, Norbit é ameaçado por três garotos da escola mas é salvo por Rasputia (Eddie Murphy), uma robusta garota de 10 anos. Os dois crescem, namoram e se casam. Juntamente com seus irmãos Jack Grandão (Terry Lewis), Azulão (Mighty Rasta) e Earl (Clifton Powell), Rasputia administra a Construtora Latimore. Norbit é empregado da empresa, sendo sempre ridicularizado pelos cunhados. A vida de Norbit não anda nada bem, mas ela muda após reencontrar Kate, que decide comprar o antigo orfanato do sr. Wong. Porém o que Kate não sabe é que seu noivo, Deion (Cuba Gooding Jr.), planeja transformar o local em um bar de strip-tease, contando com a ajuda dos irmãos de Rasputia. Reanimado por ter reencontrado Kate, Norbit ganha confiança e, aos poucos, passa a enfrentar a esposa e sua família.</p>
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
