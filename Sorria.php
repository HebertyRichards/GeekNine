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
  <title>Sorria</title>
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
    <img src="imagens/Sorria.png" alt="Sorria">
    <h1>Sorria</h1>
  </div>
    <div class = "rating"> 
    <p> 2022 </dp>
    <p> 1h, 55m </p>
      <a href="https://www.imdb.com/title/tt15474916/?ref_=fn_al_tt_1">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Sosie Bacon.png" alt="Sosie Bacon">
      <span>Sosie Bacon</span>
        <img src="imagens/Kyle Gallner.png" alt="Kyle Gallner">
      <span>Kyle Gallner</span>
        <img src="imagens/Caitlin Stasey.png" alt="Caitlin Stasey">
      <span>Caitlin Stasey</span>
        <img src="imagens/Jessie T. Usher.png" alt="Jessie T. Usher">
      <span>Jessie T. Usher</span>
  </div>
  <div class="texto1">
    <p>Em Sorria, tudo na vida da Dra. Rose Cotter (Sosie Bacon) muda, após uma paciente morrer de forma brutal em sua frente, e ela testemunhar o incidente bizarro e traumático no consultório. A partir daí, ela começa a experimentar ocorrências assustadoras que ela não consegue explicar, mas que de alguma forma, se relacionam com a morte que ela presenciou. Para entender o fenômeno que não sai de sua cabeça, a Dra. irá atrás de respostas, mesmo que o mal também já esteja perseguindo-a, e tudo que ela mais quer, é também fugir. Rose irá até as últimas consequências, com o objetivo de desvendar e combater o mal desconhecido que começou a afetar sua vida e de todos ao seu redor. Cada dia mais imersa nessa teia de acontecimentos assustadores, para sobreviver, ela deverá enfrentar a situação perturbadora que se apresenta, e tentar escapar de sua nova e horrível realidade.</p>
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
