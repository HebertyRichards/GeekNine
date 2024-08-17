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
  <title>A Sociedade da Neve</title>
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
    <img src="imagens/Neve.png" alt="A Sociedade da Neve">
    <h1>A Sociedade da Neve</h1>
  </div>
      <div class = "rating"> 
      <p> 2023 </p>
      <p> 2h, 24m </p>
        <a href="https://www.imdb.com/title/tt16277242/?ref_=fn_al_tt_1">7.8/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Enzo Vogrincic.png" alt="Enzo Vogrincic">
      <span>Enzo Vogrincic</span>    
        <img src="imagens/Agustín Pardella.png" alt="Agustín Pardella">
      <span>Agustín Pardella</span>
        <img src="imagens/Matías Recalt.png" alt="Matías Recalt">
      <span>Matías Recalt</span>
        <img src="imagens/Tomas Wolf.png" alt="Tomas Wolf">
      <span>Tomas Wolf</span>
  </div>
  <div class="texto1">
    <p>Inspirado em uma história real e baseado no livro homônimo de Pablo Vierci, A Sociedade da Neve fala sobre o caso que ocorreu em 1972, quando o voo 571 da Força Aérea Uruguaia, fretado para levar uma equipe de rugby ao Chile, cai em uma geleira no coração dos Andes. Apenas 29 de seus 45 passageiros sobrevivem ao acidente. Presos em um dos ambientes mais inacessíveis e hostis no planeta, eles são obrigados a recorrer a medidas extremas para se manterem vivos.</p>
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
