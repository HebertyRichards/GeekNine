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
  <title>O Protetor: Capitulo Final</title>
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
    <img src="imagens/O Protetor.png" alt="Protetor">
    <h1>O Protetor: Capitulo Final</h1>
  </div>
      <div class = "rating"> 
      <p> 2023 </p>
      <p> 1h, 49m </p>
        <a href="https://www.imdb.com/title/tt17024450/?ref_=nv_sr_srsg_6_tt_8_nm_0_q_o%2520protetor">6.8/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Denzel Washington.png" alt="Denzel Washington">
      <span>Denzel Washington</span>    
        <img src="imagens/Dakota Fanning.png" alt="Dakota Fanning">
      <span>Dakota Fanning</span>
        <img src="imagens/Eugenio Mastrandrea.png" alt="Eugenio Mastrandrea">
      <span>Eugenio Mastrandrea</span>
        <img src="imagens/David Denman.png" alt="David Denman">
      <span>David Denman</span>
  </div>
  <div class="texto1">
    <p>O Protetor: Capítulo Final é o terceiro - e último - filme da franquia O Protetor, iniciada em 2014 e inspirada pela série homônima estrelada por Edward Woodward nos anos 80. No terceiro capítulo da saga, desde que desistiu de sua vida como assassino do governo, Robert McCall (Denzel Washington) não consegue descansar o suficiente. Ele quer ajudar as pessoas ao seu redor e tem lutado para reconciliar as coisas horríveis que fez no passado, encontrando um estranho consolo em servir à justiça em nome dos oprimidos. Agora morando no sul da Itália, ele logo descobre que seus novos amigos estão sob o controle dos chefes do crime local. À medida que os eventos se tornam mortais, McCall se torna um protetor ao enfrentar a máfia. Quando alguém é injustiçado, o ex-agente do governo reativa suas habilidades de seu passado brutal e sai como um exército de um homem para realizar a justiça vigilante.</p>
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
