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
  <title>Monitor ViewSonic</title>
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
         <div class = "h1" align = "center">
        <h1> Novo monitor gamer ViewSonic tem apenas 0,01 ms<br> de tempo de resposta: conheça </h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/monitor-s1.jpeg" alt="imagens/monitor-s1.jpeg" width="400px">
      </div>
     <div class = "chip-c" align="center">
 <p><em>A fabricante de monitores ViewSonic, que é especializada em produtos de ponta no segmento, anunciou um novo modelo gamer que tem um grande diferencial em suas especificações: o tempo de resposta de 0,01 ms.</em> </p>

      <p>
        Chamado de XG272-2K-OLED, o modelo foi projetado especialmente para aqueles jogadores assíduos que prezam por uma boa experiência no PC. O produto de ponta, que também inclui outras especificações de alto calibre, é voltado para jogos competitivos, onde cada detalhe pode fazer a diferença para alcançar a vitória.Além do tempo de resposta de 0,01 ms, o produto inclui "cores extraordinárias", segundo a fabricante, e painel de 240Hz. O produto também inclui certificação da Blur Busters e suporta as tecnologias NVIDIA G-SYNC e AMD FreeSync Premium. </p>
       <div class = "sub">
        <h2>Especificações do XG272-2K-OLED, novo monitor gamer da ViewSonic</h2>
        </div>
       <p>
         O XG272-2K-OLED terá apenas uma versão de 27 polegadas, tamanho ideal que conta com resolução nativa 2K QHD (2560x1440). Seu painel OLED traz uma precisão excepcional de cores, "contento os melhores níveis de brilho da categoria" — além de uma ótima capacidade de resposta. A tecnologia OLED do monitor gamer oferecerá melhor contraste, ângulos de visão e gamas de cores mais amplas, bem como uma taxa de atualização mais rápida em comparação aos monitores LCD padrões do mercado.
       </p>
       <p>  O visual do XG272-2K-OLED também impressiona. Ele estará disponível apenas na cor branca e possui controle remoto capaz de controlar as configurações e a iluminação RGB na parte traseira — é realmente um produto muito bonito para integrar o setup gamer.  O novo monitor gamer da ViewSonic possui duas entradas HDMI 2.1, DisplayPort, USB-A/B/C e saída de áudio. O XG272-2K-OLED também é super ergonômico e oferece ajuste de articulação, inclinação, rotação e altura.
       </p>
       <div class = "chip-b">
         <img src="imagens/monitor-s2.jpeg" alt="imagens/monitor-s2.jpeg" width="400px">
           </div>
       <p><em>"Projetado especificamente para jogadores, o XG272-2K-OLED oferece desempenho excepcional com imagens de qualidade superior e reprodução suave de jogos com baixa latência", contou Jeff Muto, diretor de negócios da ViewSonic.</em></p>
       <div class = "sub">
       <h2>Preço do novo monitor</h2>
       </div>
       <p>O XG272-2K-OLED está em pré-venda em varejistas internacionais por US$ 899,99 — algo em torno de R$ 4.629,46 em conversão direta e sem impostos. A disponibilidade no Brasil, no entanto, não foi informada, e o preço oficial no país não foi divulgado. Um belo item para integrar o setup gamer, não é mesmo? Comente nas redes sociais do Voxel e TecMundo o que você achou do novo monitor gamer da ViewSonic!
       </p>
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