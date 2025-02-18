<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<a href="chat.php"><button title="Chat Global">Chat Global</button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samsung Galaxy Book4 Series</title>
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
    </div>
  </div>
  <table>
         <div class = "h1">
        <h1> Samsung Galaxy Book4 Series: novos lançamentos da<br> linha apostam em IA</h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/sansuIA.jpeg" alt="imagens/sansuIA.jpeg" width="400px">
      </div>
     <div class = "chip-c">
 <p>Apresentados ao mercado global em dezembro de 2023, os novos notebooks Samsung Galaxy Book4 Series chegam oficialmente em terras brasileiras no dia 18 de abril. Focada em inovação e desempenho, a marca apostou em inteligência artificial como uma das principais características da linha.

 Essa aposta é evidente, sobretudo nos modelos Galaxy Book4 Ultra e Galaxy Book4 Pro, que contam com processador NPU (Unidade de Processamento Neural) exclusivo para as demandas de IA.

 Confira abaixo os principais destaques e detalhes técnicos dos novos notebooks Samsung Galaxy Book4 Series!</p>
        <div class = "chip-b">
       <img src="imagens/sansunIA1.jpeg" alt="imagens/sansunIA1.jpeg" width="400px">
         </div>

<p>Segundo a Samsung, os dispositivos da Galaxy Book4 Series são os seus notebooks “mais inteligentes e avançados até o momento”. Para isso, a marca trabalhou em colaboração com a Microsoft para aprimorar os recursos de conectividade utilizando a IA Microsoft Copilot.</p>
       <div class = "sub">
         <h4>Dessa colaboração surgiram algumas novidades que permitem:</h4>
       </div>
       <p> - Acessar e resumir mensagens de texto de smartphones Galaxy diretamente no PC.</p>
      <p> -  Acessar recursos e dados que estão no smartphone, sem a necessidade de abrir aplicativos   individualmente.</p>
     <p>  - Usar o smartphone como câmera para o PC em videochamadas.</p>
      <p> - Ampliar a capacidade de emparelhamento com outros dispositivos Galaxy, facilitando o uso de tablets como segundo monitor e diminuindo a latência nos fones de ouvido sem fio.</p>
       <div class = "sub">
          <h4>Notebooks para todos os públicos</h4>
        </div>
       
      <p> -Pensando no aumento dos trabalhos remoto e híbrido, a Samsung trouxe features diferenciadas para cada um dos três modelos da Galaxy Book4 Series. Dessa forma, é possível escolher o dispositivo ideal para a área de atuação e estilo de trabalho de cada usuário.</p>
       <div class = "sub">
         <h4>Galaxy Book4 Ultra</h4>
       </div>
       <div class = "chip-b">
          <img src="imagens/book4.jpeg" alt="imagens/book4.jpeg" width="400px">
            </div>
 <p> O potente Galaxy Book4 Ultra é indicado para pessoas que trabalham com criatividade, como artistas, designers, streamers e criadores de conteúdo, que precisam de display de alta qualidade e muito poder de processamento.</p>
     
       <div class = "sub">
          <h4>Para isso, ele conta com as seguintes especificações:</h4>
        </div>
        <p>  - Chipset que inclui NPU, GPU NVIDIA® GeForce RTX™ e processador Intel® Core™ Ultra 7 ou Core™ Ultra 9.</p>
       <p>  - Memória RAM de 16 GB.</p>
       <p>  - Armazenamento SSD de 1 TB, expansível até 2 TB com cartão microSD.</p>
        <p>  - Tela touchscreen de 16'', com resolução 3K e Dynamic AMOLED 2X antirreflexiva.</p>
        <p>  - Taxa de atualização de até 120Hz.</p>
       <p>  - Câmera 1080p FHD.</p>
        <p>Além disso, o modelo Galaxy Book4 Ultra ainda tem sistema de resfriamento interno aprimorado, para dar conta da demanda, e bateria de longa duração, que promete até 21 horas de duração na reprodução de vídeo e carregamento super-rápido de 140W.</p>
       <div class = "sub">
          <h4>Galaxy Book4 360</h4>
        </div>
       <div class = "chip-b">
         <img src="imagens/book360.jpeg" alt="imagens/book360.jpeg" width="400px">
           </div>
       <p>Já o Samsung Galaxy Book4 360 é uma ótima opção para quem está sempre em movimento. Pesando menos de 2 kg e com design ultrafino, esse notebook tem como seu maior destaque sua função 2-em-1, permitindo que seja usado também como tablet, sem perder a potência.</p>
       <div class = "sub">
         <h4>Veja mais detalhes:</h4>
       </div>
       <p>  - Processador Intel® Core™ 5 ou Core™ 7.</p>
       <p>  -  Memória RAM de 8GB ou 16 GB.</p>
       <p>  -   Armazenamento SSD de 1 TB,expansível até 2 TB com cartão microSD.</p>
       <p>  -  Tela touchscreen de 15,6'' AMOLED.</p>
       <p>  -  Câmera 1080p FHD.</p>
       <p>  - Compatibilidade com S Pen.</p>
        <p>O 360 também é ótimo para quem precisa se conectar em outros dispositivos e vem com duas portas Thunderbolt™, HDMI, USB 3.2 Type-A, microSD e 3.5pi HP/MIC.</p>
       
       <div class = "sub">
         <h4>Galaxy Book4 Pro</h4>
       </div>
       <div class = "chip-b">
        <img src="imagens/bookpro.jpeg" alt="imagens/bookpro.jpeg" width="400px">
          </div>
       <p>Para quem busca um notebook para as demandas do dia a dia, como navegar, estudar, assistir filmes e séries ou jogar casualmente, mas também que dê conta de uma rotina multitarefas e facilite a produtividade, o Samsung Galaxy Book4 Pro pode ser uma boa pedida.</p>
       <div class = "sub">
          <h4>Confira suas particularidades:</h4>
       </div>
          <p>  - Chipset que inclui NPU, GPU Intel® ARC e processador Intel® Core™ Ultra 7.</p>
          <p>  - Memória RAM de 16 GB.</p>
          <p>  - Armazenamento SSD de 512 GB ou 1 TB,expansível até 2 TB com cartão microSD.</p>
          <p>  - Tela Touchscreen de 14'' ou 16'', com resolução 3K e Dynamic AMOLED 2X antirreflexiva</p>
         <p>Assim como os outros modelos, o Galaxy Book4 Pro vem com sistema operacional Windows 11, assistente IA Microsoft Copilot e toda a conectividade com outros produtos Samsung Galaxy.</p>

        <p> Para conhecer todos os detalhes dos notebooks Samsung Galaxy Book4 Series e escolher o melhor modelo para você, visite hoje mesmo o site da Samsung e aproveite!</p>
        </div>
 </p>
     </div>
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