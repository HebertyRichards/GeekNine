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
  <title>Ilha do Medo</title>
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
    <img src="imagens/Ilha.png" alt="Ilha do Medo">
    <h1>Ilha do Medo</h1>
  </div>
    <div class = "rating"> 
    <p> 2010 </p>
    <p> 2h, 18m </p>
      <a href="https://www.imdb.com/title/tt1130884/?ref_=fn_al_tt_1">8.2/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Leonardo DiCaprio.png" alt="Leonardo DiCaprio">
      <span>Leonardo DiCaprio</span>
        <img src="imagens/Mark Ruffalo.png" alt="Mark Ruffalo">
      <span>Mark Ruffalo</span>
        <img src="imagens/Ben Kingsley.png" alt="Ben Kingsley">
      <span>Ben Kingsley</span>
        <img src="imagens/Emily Mortimer.png" alt="Emily Mortimer">
      <span>Emily Mortimer</span>  
  </div>
  <div class="texto1">
    <p>1954. Teddy Daniels (Leonardo DiCaprio) investiga o desaparecimento de um paciente no Shutter Island Ashecliffe Hospital, em Boston. No local, ele descobre que os médicos realizam experiências radicais com os pacientes, envolvendo métodos ilegais e anti-éticos. Teddy tenta buscar mais informações, mas enfrenta a resistência dos médicos em lhe fornecer os arquivos que possam permitir que o caso seja aberto. Quando um furacão deixa a ilha sem comunicação, diversos prisioneiros conseguem escapar e tornam a situação ainda mais perigosa.</p>
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
