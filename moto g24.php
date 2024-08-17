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
  <title>Moto G24 Power </title>
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
  <div class="container-a" align="center">
    <h2>NOVIDADES</h2>
  </div>
  <table>
         <div class = "h1" align = "center">
        <h1>Moto G24 Power chega ao Brasil custando R$ 999 </h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/moto g24.jpeg" alt="Imagem de Exemplo 2" width="400px">
      </div>
     <div class = "chip-c" align="center">
 <p><em>Novo smartphone baratinho da Motorola já pode ser comprado no Brasil. Aparelho traz bateria de 6.000 mAh e carregamento rápido de até 30 W</em> </p>

      <p>
      A Motorola anunciou nesta semana o celular Moto G24 Power para o mercado brasileiro. O ponto forte do smartphone é sua bateria de 6.000 mAh que, segundo a fabricante, é capaz de ficar 48 horas sem carregar. O Moto G24 Power chega no lançamento com o preço de R$ 999.

      O celular é vendido com um carregador rápido de 30 W com tecnologia TurboPower. Esse acessório promete completar a capacidade da bateria em 1h25. O tempo para chegar a uma carga de 50% é de 32 minutos, segundo a Motorola. A bateria de 6.000 mAh é um upgrade do modelo Moto G24 “não Power”.</p>
      
       <p>
         O Moto G24 Power é equipado com o SoC MediaTek Helio G85, que possui oito núcleos. A memória RAM é de 4 GB, mas o smartphone possui suporte para RAM Boost, que utiliza uma porção do armazenamento de 128 GB para atingir 8 GB de memória RAM.

         Na parte das câmeras, a lente principal do conjunto duplo possui 50 MP. A segunda câmera é uma macro de 2 MP. O sensor para selfies tem 8 MP. O Moto G24 Power tem o recurso Night Vision, que promete melhorar a captura de fotos à noite ou em ambientes com baixa iluminação — recurso similar ao Nightography da Samsung.

         O Moto G24 Power tem tela de 6,6 polegadas e suporte para resolução HD+. A taxa de atualização pode chegar até 90 Hz. Em tarefas menos exigentes, ela é reduzida automaticamente para 60 Hz.

         O smartphone sai de fábrica com Android 14, a versão mais atualizada do sistema operacional mobile do Google. O Moto G24 Power é vendido em duas opções de cores (azul e azul celeste).
       </p>
       <div class = "sub">
        <h4>Ficha técnica do Moto G24 Power (Motorola)<br></br>
        Processador: MediaTek Helio G85 — oito núcleos e frequência máxima de 2,0 GHz<br></br>
        Memória: 4 GB de memória RAM (mais 4 GB com RAM Boost ativado) e 128 GB de armazenamento<br></br>
        Tela: 6,6 polegadas, suporte para resolução HD+, taxa de atualização de até 90 Hz<br></br>
        Câmeras traseira: principal de 50 MP, macro de 2 MP<br></br>
        Câmera frontal: 8 MP<br></br>
        Rede móvel: 4G<br></br>
        Bateria: 6.000 mAh, com suporte para recarga rápida de até 30 W<br></br>
        Sistema operacional: Android 14<br></br></h4>
        </div>
            </div>
     </div>
 
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