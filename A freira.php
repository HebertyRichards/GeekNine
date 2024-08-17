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
  <title>A Freira II</title>
  <link href="games1.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/png" href="imagens/file.png">
</head>

<body>
  </style>
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
      <img src="imagens/A Freira 2.png" alt="A Freira">
      <h1>A Freira II</h1>
    </div>
    <div class="rating">
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
