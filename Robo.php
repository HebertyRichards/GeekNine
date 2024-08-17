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
<html>
  <style>
    body {
        margin: 0;
        padding: 0;
      }

      .h1{
      display:flex;
      justify-content: center; 
      align-items: center; 
      height: 200px; 
       }
    
        .chip-b{
        display:flex;
        justify-content: center; 
        align-items: center; 
        text-align: center;
      }

      .chip-c{
        margin-left: auto;
        margin-right: auto;
        width: 40%;
        text-align: justify;
        margin-bottom: 10px;
        font-size: 20px;
        color: black;
      }
    
      .sub{
        color: darkblue;
        font-style: italic;
        font-weight: bold;
      }
  </style>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Robô subaquático pode mapear as profundezas do oceano e <br>ajudar em missões arriscadas</title>
  <link href="tecnologia.css" rel="stylesheet" type="text/css" />
  <link rel="website icon" type="png" href="imagens/file.png">
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
  <table>
         <div class = "titulo-a" align = "center">
        <h1> Robô subaquático pode mapear as profundezas do oceano <br>e ajudar em missões arriscadas </h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/robo2.jpeg" alt="robo2.jpeg" width="400px">
      </div>
     <div class = "chip-c" align="center">
       <p>O robô subaquático uOne, da empresa belga uware Robotics, promete assumir o lugar de mergulhadores humanos na execução de tarefas arriscadas e trabalhosas. O robô, que combina características de dois tipos diferentes de bots submarinos, foi projetado principalmente para a inspeção de estruturas subaquáticas. A empresa belga uWare Robotics desenvolveu um robô híbrido capaz de realizar missões subaquáticas; O uOne conta com oito propulsores vetoriais, um sistema de câmeras integradas, unidade de medição inercial (IMU) e outras tecnologias que permitem seguir uma trajetória pré-programada de forma autônoma; Além de criar mapas tridimensionais do trajeto, o robô também coleta dados que são armazenados em uma unidade SSD integrada e podem ser baixados ao fim da missão; O uOne tem 40 cm de altura, 40 cm de largura e 50 cm de comprimento, com peso de 15 kg e capacidade para carregar até 5 kg; A velocidade máxima do robô é de 5,5 km/h, com bateria trocável que, quando carregada por duas horas, garante autonomia de até duas horas nas expedições; Ele é capaz de descer a uma profundidade máxima de 75 metros, mas a empresa está desenvolvendo uma carroceria de alumínio para substituir seu atual corpo de acrílico e aumentar esse número;
       As informações foram publicadas na revista Uncrewed Systems Technology.</p>
    <div class = "chip-b">
          <img src="imagens/robo.jpeg" alt="robo.jpeg" width="400px">
            </div>
         <p>O uOne conta com oito propulsores vetoriais que permitem flutuar no local ou mover-se em qualquer direção, além de um sistema de câmeras integradas, uma unidade de medição inercial (IMU) e outras tecnologias que lhe dão autonomia para seguir uma “trajetória de vôo” subaquática pré-programada.</p>
     
       <div class = "sub">
         <h2>"Robô subaquático pode mapear as profundezas do oceano"</h2>
       </div>
         <p>Graças à capacidade de criar mapas tridimensionais de seus arredores, o uOne consegue inspecionar “pontos de interesse” durante a missão. Com um dispositivo SSD integrado, é possível coletar dados como imagens RGB de alta resolução, leituras de temperatura e profundidade e baixá-los assim que o robô estiver de volta à base.</p>
      
       <div class = "chip-b">
        <img src="imagens/robo4.jpg" alt="robo4.jpg" width="400px">
       </div>
          <p>Quanto às suas medidas, o uOne tem 40 cm de altura, 40 cm de largura e 50 cm de comprimento. Seu peso é de 15 kg com capacidade para carregar até 5 kg de sensores, luzes ou outros itens. A velocidade máxima do robô é de 3 nós (5,5 km/h), e, com uma carga estimada em duas horas de sua bateria trocável, ele possui autonomia de aproximadamente duas horas.Por enquanto, o uOne é capaz de descer a uma profundidade máxima de 75 metros, mas a empresa espera aumentar esse número com uma carroceria de alumínio que está sendo desenvolvida para substituir seu atual corpo de acrílico.</p>
        </div>
           <div class="container-a" align="center">
             <h2>OUTRAS NOTICÍAS:</h2>
           </div>
           <div class="news-container">
           <div class="news-item">
             <img src="imagens/eletronicos.jpeg" alt="Imagem de Exemplo 1">
             <h2>Eletrônicos mais populares</h2>
             <p> Site AliExpress com até 92% de desconto</p>
             <a href="eletronicos.php">Leia mais</a>
           </div>
           <div class="news-item">
             <img src="imagens/woocommerce.jpeg" alt="Imagem de Exemplo 2">
             <h2> WooCommerce</h2>
             <p>Descubra o que é o WooCommerce e as vantagens de hospedar a sua loja online com essa plataforma na Hostinger</p>
             <a href="woocommerce.php">Leia mais</a>
           </div>

           <div class="news-item">
             <img src="imagens/moto g24.jpeg" alt="Imagem de Exemplo 2">
             <h2>Moto G24 Power chega ao Brasil custando R$ 999</h2>
             <p>Novo smartphone baratinho da Motorola já pode ser comprado no Brasil. Aparelho traz bateria de 6.000 mAh e carregamento rápido de até 30 W</p>
             <a href="moto g24.php">Leia mais</a>
           </div>
           </div>
         </table>
       <br></br>
       <br></br> 
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