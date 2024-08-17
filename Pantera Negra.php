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
  <title>Pantera Negra: Wakanda Para Sempre</title>
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
    <img src="imagens/Pantera Negra.png" alt="Pantera Negra">
    <h1>Pantera Negra: Wakanda Para Sempre</h1>
  </div>
      <div class = "rating"> 
      <p> 2022 </p>
      <p> 2h, 41m </p>
        <a href="https://www.imdb.com/title/tt9114286/?ref_=fn_al_tt_1">6.7/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Letitia Wright.png" alt="Letitia Wright">
      <span>Letitia Wright</span>    
        <img src="imagens/Lupita Nyong'o.png" alt="Lupita Nyong'o">
      <span>Lupita Nyong'o</span>
        <img src="imagens/Danai Gurira.png" alt="Danai Gurira">
      <span>Danai Gurira</span>
        <img src="imagens/Winston Duke.png" alt="Winston Duke">
      <span>Winston Duke</span>
  </div>
  <div class="texto1">
    <p> Pantera Negra: Wakanda Para Sempre é a continuação do longa Pantera Negra, da Marvel, dirigido por Ryan Coogler e produzido por Kevin Feige. No filme, o mundo de Wakanda se expande. Após a morte do ator de T'Challa (Chadwick Boseman) o foco de Wakanda Para Sempre são os personagens em volta do Pantera Negra. Rainha Ramonda (Angela Bassett), Shuri (Letitia Wright), M'Baku (Winston Duke), Okoye (Danai Gurira) e as Dora Milage lutam para proteger a nação fragilizada de outros países após a morte de T'Challa. Enquanto o povo de Wakanda se esforça para continuar em frente neste novo capítulo, a família e amigos do falecido rei precisam se unir com a ajuda de Nakia (Lupita Nyong'o), integrante dos Cães de Guerra, e Everett Ross (Martin Freeman). Em meio a isso tudo, Wakanda ainda terá que aprender a conviver com a nação debaixo d'água, Talokan, e seu rei Namor (Tenoch Huerta).</p>
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
