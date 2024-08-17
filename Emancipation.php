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
  <title>Emancipation</title>
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
    <img src="imagens/Emancipation.png" alt="Emancipation">
    <h1>Emancipation</h1>
  </div>
    <div class = "rating"> 
    <p>2022</p>
    <p>2h, 12m</p>
      <a href="https://www.imdb.com/title/tt12530246/?ref_=nv_sr_srsg_1_tt_2_nm_6_q_eman">6.2/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Will Smith.png" alt="Will Smith">
      <span>Will Smith</span>
        <img src="imagens/Ben Foster.png" alt="Ben Foster">
      <span>Ben Foster</span>
    <img src="imagens/Charmaine Bingwa.png" alt="Charmaine Bingwa">
      <span>Charmaine Bingwa</span>
        <img src="imagens/Steven Ogg.png" alt="Steven Ogg">
      <span>Steven Ogg</span>
  </div>
  <div class="texto1">
    <p>Emancipation – Uma História de Liberdade conta a triunfante história de um homem escravizado que foge e atravessa os pântanos da Louisiana, nos Estados Unidos, em uma jornada tortuosa para escapar dos proprietários de plantações que quase o mataram. Peter (Will Smith) é o homem em busca da sua liberdade, que escapa da escravidão confiando em sua inteligência, fé inabalável e profundo amor por sua família, fazendo o impossível para se livrar dos caçadores de sangue frio nos implacáveis pântanos da Louisiana. O filme é inspirado nas fotos reais, de 1863, de “Peter chicoteado" (Whipped Peter), tiradas durante um exame médico do Exército dos EUA, que apareceram, pela primeira vez, na revista Harper’s Weekly. Uma destas fotos, conhecida como “As Costas Açoitadas” (The Scourged Back), mostra as costas nuas de Peter mutiladas pelas chicotadas de seus escravizadores e acabou contribuindo para a crescente oposição pública à escravidão, se tornando um símbolo das atrocidades cometidas em seu tempo.</p>
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
