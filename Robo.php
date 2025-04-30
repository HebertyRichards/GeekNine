<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Robô subaquático</title>
  <link href="tecnologia.css" rel="stylesheet" type="text/css" />
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
  <?php
  if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<div class='menu2'>";
    echo "<p class='ola'>Olá, $nome_usuario!</p>";
    echo '<a id="chat" href="chat.php">Chat Global</a>';
    echo '<a id="logout" href="logout.php">Logout</a>';
    echo "</div>";
  } else {
    echo "<div class='menu'>";
    echo '<a id="login" href="login.php">Login</a>';
    echo '<a id="cadastro" href="cadastro.php">Cadastre-se</a>';
    echo "</div>";
  }
  ?>
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
      <?php
      if (isset($_SESSION['nome'])) {
        $nome_usuario = $_SESSION['nome'];
        echo "<p class='ola2'>Olá, $nome_usuario!</p>";
        echo '<a id="chat2" href="chat.php">Chat Global</a>';
        echo '<a id="logout2" href="logout.php">Logout</a>';
      } else {
        echo '<a id="login2" href="login.php">Login</a>';
        echo '<a id="cadastro2" href="cadastro.php">Cadastre-se</a>';
      }
      ?>
    </div>
  </div>
  <div class="chip">
    <h1 id="h1"> Robô subaquático pode mapear as profundezas do oceano <br>e ajudar em missões arriscadas </h1>
    <div class="chip-b">
      <img src="imagens/robo2.jpeg" alt="Robo">
    </div>
    <div class="chip-c">
      <p>O robô subaquático uOne, da empresa belga uware Robotics, promete assumir o lugar de mergulhadores humanos na execução de tarefas arriscadas e trabalhosas. O robô, que combina características de dois tipos diferentes de bots submarinos, foi projetado principalmente para a inspeção de estruturas subaquáticas. A empresa belga uWare Robotics desenvolveu um robô híbrido capaz de realizar missões subaquáticas; O uOne conta com oito propulsores vetoriais, um sistema de câmeras integradas, unidade de medição inercial (IMU) e outras tecnologias que permitem seguir uma trajetória pré-programada de forma autônoma; Além de criar mapas tridimensionais do trajeto, o robô também coleta dados que são armazenados em uma unidade SSD integrada e podem ser baixados ao fim da missão; O uOne tem 40 cm de altura, 40 cm de largura e 50 cm de comprimento, com peso de 15 kg e capacidade para carregar até 5 kg; A velocidade máxima do robô é de 5,5 km/h, com bateria trocável que, quando carregada por duas horas, garante autonomia de até duas horas nas expedições; Ele é capaz de descer a uma profundidade máxima de 75 metros, mas a empresa está desenvolvendo uma carroceria de alumínio para substituir seu atual corpo de acrílico e aumentar esse número;
        As informações foram publicadas na revista Uncrewed Systems Technology.</p>
    </div>
    <div class="chip-b">
      <img src="imagens/robo.jpeg" alt="Robo">
    </div>
    <p>O uOne conta com oito propulsores vetoriais que permitem flutuar no local ou mover-se em qualquer direção, além de um sistema de câmeras integradas, uma unidade de medição inercial (IMU) e outras tecnologias que lhe dão autonomia para seguir uma “trajetória de vôo” subaquática pré-programada.</p>
    <h2 id="sub">"Robô subaquático pode mapear as profundezas do oceano"</h2>
    <p>Graças à capacidade de criar mapas tridimensionais de seus arredores, o uOne consegue inspecionar “pontos de interesse” durante a missão. Com um dispositivo SSD integrado, é possível coletar dados como imagens RGB de alta resolução, leituras de temperatura e profundidade e baixá-los assim que o robô estiver de volta à base.</p>
    <div class="chip-b">
      <img src="imagens/robo4.jpg" alt="Robo">
    </div>
    <p>Quanto às suas medidas, o uOne tem 40 cm de altura, 40 cm de largura e 50 cm de comprimento. Seu peso é de 15 kg com capacidade para carregar até 5 kg de sensores, luzes ou outros itens. A velocidade máxima do robô é de 3 nós (5,5 km/h), e, com uma carga estimada em duas horas de sua bateria trocável, ele possui autonomia de aproximadamente duas horas.Por enquanto, o uOne é capaz de descer a uma profundidade máxima de 75 metros, mas a empresa espera aumentar esse número com uma carroceria de alumínio que está sendo desenvolvida para substituir seu atual corpo de acrílico.</p>
  </div>
  <div class="container-a">
    <h2>OUTRAS NOTICÍAS:</h2>
  </div>
  <div class="news-container">
    <div class="news-item">
      <img src="imagens/eletronicos.jpeg" alt="Eletronicos">
      <h2>Eletrônicos mais populares</h2>
      <p> Site AliExpress com até 92% de desconto</p>
      <a href="eletronicos.php">Leia mais</a>
    </div>
    <div class="news-item">
      <img src="imagens/woocommerce.jpeg" alt="WooCommerce">
      <h2> WooCommerce</h2>
      <p>Descubra o que é o WooCommerce e as vantagens de hospedar a sua loja online com essa plataforma na Hostinger</p>
      <a href="woocommerce.php">Leia mais</a>
    </div>
    <div class="news-item">
      <img src="imagens/moto g24.jpeg" alt="Moto G24">
      <h2>Moto G24 Power chega ao Brasil custando R$ 999</h2>
      <p>Novo smartphone baratinho da Motorola já pode ser comprado no Brasil. Aparelho traz bateria de 6.000 mAh e carregamento rápido de até 30 W</p>
      <a href="moto g24.php">Leia mais</a>
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