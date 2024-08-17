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
  <title>Inatividade Paranormal</title>
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
    <img src="imagens/Inatividade.png" alt="Inatividade Paranormal">
    <h1>Inatividade Paranormal</h1>
  </div>
    <div class = "rating"> 
    <p> 2013 </p>
    <p> 1h, 26m </p>
      <a href="https://www.imdb.com/title/tt2243537/?ref_=fn_al_tt_1">5.0/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Marlon Wayans.png" alt="Marlon Wayans">
      <span>Marlon Wayans</span>
        <img src="imagens/Essence Atkins.png" alt="Essence Atkins">
      <span>Essence Atkins</span>
        <img src="imagens/Nick Swardson.png" alt="Nick Swardson">
      <span>Nick Swardson</span>
        <img src="imagens/Cedric the Entertainer.png" alt="Cedric the Entertainer">
      <span>Cedric the Entertainer</span>  
  </div>
  <div class="texto1">
    <p>Malcolm (Marlon Wayans) é um cara descolado, que mora sozinho, mas resolve chamar sua namorada Kisha (Essence Atkins) para dividir o lar de seus sonhos. Animado com a novidade, ele resolve registrar tudo com câmeras espalhadas pela casa, mas não imaginava que um hóspede fantasma começaria a aprontar, transformando a vida deles no mais louco dos pesadelos. Para se livrar do mal, eles recorrem a diversas saídas, entre elas chamar um médium (Nick Swardson), um padre exorcista (Cedric The Entertainer), uma dupla de caça-fantasmas e até uma gangue da pesada. Tudo o que eles querem é se livrar do espiríto maligno e voltar a transar em paz. Só que essa missão não será nada fácil.</p>
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
