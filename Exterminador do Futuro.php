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
  <title>O Exterminador do Futuro 2: O Julgamento Final</title>
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
    <img src="imagens/Exterminador.png" alt="Exterminador">
    <h1>O Exterminador do Futuro 2: O Julgamento Final</h1>
  </div>
    <div class = "rating"> 
    <p>1991</p>
    <p>2h, 17m</p>
      <a href="https://www.imdb.com/title/tt0103064/?ref_=fn_al_tt_2">8.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Arnold Schwarzenegger.png" alt="Arnold Schwarzenegger">
      <span>Arnold Schwarzenegger</span>
        <img src="imagens/Linda Hamilton.png" alt="Linda Hamilton">
      <span>Linda Hamilton</span>
        <img src="imagens/Robert Patrick.png" alt="Robert Patrick">
      <span>Robert Patrick</span>
        <img src="imagens/Edward Furlong.png" alt="Edward Furlong">
      <span>Edward Furlong</span>
  </div>
  <div class="texto1">
    <p>A criança destinada a ser líder (Edward Furlong) já nasceu, mas vive infeliz por morar com pais adotivos, e por estar ser privada da companhia da mãe (Linda Hamilton), que foi considerada louca quando falou de um exterminador vindo do futuro. Neste contexto, um androide (Arnold Schwarzenegger) exatamente como o modelo T-800 do filme original, vem do futuro, mas dessa vez, para proteger o garoto. Todavia, existe um problema: o mais avançado androide existente no futuro, um modelo T-1000 (Robert Patrick), que feito de "metal líquido", não pode ter nenhum dano permanente e pode assumir a forma que desejar, também veio para o passado, com a missão de matar o menino.</p>
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
