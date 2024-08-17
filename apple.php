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

    .h3 {
      display: flex;
      justify-content: center;
      align-items: center;
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
    
    .news-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: center;
      text-align: center;
    }

    .news-item {
      width: 400px;
      height: 400px;
      margin: 10px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 30px;
      overflow: hidden;
      box-sizing: border-box;
      background-color: #fff;
    }

    .news-item img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .news-item h2 {
      font-size: 18px;
      margin: 0 0 10px;
    }

    .news-item p {
      font-size: 14px;
      color: #666;
      margin: 0 0 10px;
    }

    .news-item a {
      display: inline-block;
      color: #114379;
      text-decoration: none;
    }

    .news-item a:hover {
      text-decoration: underline;
    }
  </style>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MacBook Air de 13</title>
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
        <h1>Apple apresenta os novos notebooks MacBook Air de 13<br> e 15 polegadas com o poderoso chip M3</h1>
           </div>
           <div class="h3">
  <h3>O notebook mais popular do mundo ficou ainda melhor com desempenho impressionante, Wi-Fi mais rápido e compatibilidade<br> com até dois monitores externos — sem deixar de lado o design fino e leve com até 18 horas de bateria</h3>
    </div>
     <div class = "chip-b">
    <img src="imagens/mac-3.jpeg" alt="imagens/mac-3.jpeg" width="400px">
      </div>
     <div class = "chip-c" align="center">
 <p> A Apple anunciou hoje o novo MacBook Air com o poderoso chip M3, levando a incrível combinação de portabilidade e desempenho eficiente a outro nível. Com o chip M3, o MacBook Air ficou até 60% mais rápido do que o modelo com chip M1 e até 13 vezes mais rápido do que o melhor MacBook Air com processador Intel.1. E, graças ao Neural Engine mais rápido e mais eficiente no chip M3, o MacBook Air continua sendo o melhor notebook pessoal do mundo para inteligência artificial. Os notebooks MacBook Air de 13 e 15 polegadas têm um design incrivelmente fino e leve, bateria com até 18 horas de duração1, uma linda tela Liquid Retina e novos recursos, incluindo compatibilidade com até dois monitores externos e Wi-Fi com o dobro de velocidade da geração anterior. Com uma estrutura unibody de alumínio resistente que foi projetada para durar, o novo MacBook Air está disponível em quatro cores: meia-noite, que recebe um tratamento anodizado inovador para reduzir as impressões digitais, estelar, cinza-espacial e prateado. Em conjunto com a câmera, microfones e alto-falantes superiores, a porta MagSafe para recarga, o design silencioso sem ventoinha e o macOS, o MacBook Air oferece uma experiência inigualável, fazendo com que os modelos de 13 e 15 polegadas sejam os mais vendidos nessas categorias. Os clientes nos Estados Unidos podem reservar os novos modelos a partir de hoje, com disponibilidade a partir de 8 de março.<p>
<em> “O MacBook Air é o nosso Mac mais popular e mais amado. A maioria dos clientes prefere esse notebook a qualquer outro. E, hoje, ele fica ainda melhor com o chip M3 e novos recursos”, afirma Greg Joswiak, senior vice president of Worldwide Marketing da Apple. “De universitários em busca do diploma a usuários corporativos atrás de produtividade, ou qualquer pessoa que simplesmente queira a combinação imbatível de desempenho, portabilidade e bateria líder do setor em um design sem ventoinha, o novo MacBook Air continua sendo o melhor notebook fino e leve do mundo.”</em></p>
</p>
        <div class = "chip-b">
       <img src="imagens/mac-1.jpeg" alt="imagens/mac-1.jpeg" width="400px">
         </div>
        <div class = "sub">
        <h2>Desempenho impressionante com o chip M3:</h2>
        </div>

<p>Produzido com a tecnologia de três nanômetros líder do setor, o chip M3 da Apple traz ainda mais desempenho e recursos para o MacBook Air. Com CPU de 8 núcleos, GPU de até 10 núcleos e até 24 GB de memória unificada, o novo MacBook Air é até 60% mais rápido do que o modelo com M1 e até 13 vezes mais rápido do que o melhor MacBook Air com processador Intel1. Além disso, a bateria dura até 18 horas, seis a mais do que um MacBook Air com processador Intel1. Os usuários perceberão a velocidade impressionante do chip M3 em tudo que fizerem, de atividades diárias a tarefas pesadas, como editar fotos e vídeos ou desenvolver software. E, com a GPU de última geração do M3, o novo MacBook Air é compatível com Mesh Shading e traçado de raios acelerados por hardware, oferecendo iluminação, reflexos e sombras mais precisos para experiências extremamente realistas nos jogos. Também inclui o mecanismo de mídia mais recente que aceita decodificação AV1 para vídeos de serviços de streaming com maior qualidade.
</p>
       <div class = "sub">
       <h2> O chip M3 potencializa ainda mais o desempenho do MacBook Air:</h2>
       </div>

      
     <p> - Jogos como No Man’s Sky rodam até 60% mais rápido do que no MacBook Air de 13 polegadas com chip M1.1</p>
     <p> - Aprimorar uma imagem com inteligência artificial usando o recurso Super Resolution do Photomator é 40% mais rápido do que no modelo de 13 polegadas com chip M1 e até 15 vezes mais rápido para quem ainda não mudou para um Mac com o chip da Apple1.</p>
     <p> - Trabalhar em planilhas do Excel é até 35% mais rápido do que no modelo de 13 polegadas com chip M1 e até três vezes mais rápido para quem ainda não mudou para um Mac com o chip da Apple1.</p>
     <p> - Editar vídeos no Final Cut Pro é até 60% mais rápido do que no modelo de 13 polegadas com chip M1 e até 13 vezes mais rápido para quem ainda não mudou para um Mac com o chip da Apple1.</p>
     <p> - Em comparação a um notebook PC com processador Intel Core i7, o MacBook Air tem desempenho até duas vezes mais rápido, é até 50% mais rápido em navegação na internet e a duração da bateria é até 40% mais longa1.</p>
       <div class = "sub">
        <h2>O melhor notebook pessoal do mundo para IA</h2>
        </div>
    <p>  Com a mudança para o chip da Apple, qualquer um dos modelos de Mac é uma plataforma perfeita para inteligência artificial (IA). O M3 inclui um Neural Engine de 16 núcleos mais rápido e mais eficiente, além de aceleradores na CPU e na GPU para incrementar o aprendizado de máquina no aparelho, tornando o MacBook Air o melhor notebook pessoal do mundo para IA. Aproveitando esse desempenho de IA incrível, o macOS disponibiliza recursos inteligentes que aumentam a produtividade e a criatividade, para o usuário ativar funções avançadas da câmera, vocalização de texto em tempo real, tradução, sugestões de texto, compreensão visual, recursos de acessibilidade e muito mais.
    <br> </br>  Com um amplo ecossistema de apps que oferecem recursos avançados de IA, é possível, por exemplo, conferir a tarefa da escola com o AI Math Assistance no Goodnotes 6, editar fotos automaticamente no Pixelmator Pro ou remover o ruído de fundo de um vídeo usando o CapCut. Combinado com a arquitetura de memória unificada do chip da Apple, o MacBook Air também consegue rodar modelos de IA otimizados, incluindo grandes modelos de linguagem (LLMs) e modelos de difusão para gerar imagens localmente com maior qualidade. Além do desempenho no aparelho, o MacBook Air é compatível com soluções na nuvem, permitindo rodar apps de produtividade e criatividade que usam IA, como Microsoft Copilot para Microsoft 365, Canva e Adobe Firefly.
       O notebook mais popular do mundo
       <br> </br> Mais pessoas optam pelo MacBook Air, e o chip M3 eleva o nível mais uma vez com sua combinação fenomenal de desempenho, portabilidade e recursos que os usuários adoram:       <br> </br> Dois tamanhos perfeitos em um design superportátil: com uma estrutura de alumínio resistente que foi projetada para durar, os notebooks MacBook Air de 13 e 15 polegadas têm uma bateria com duração fantástica, são incrivelmente leves e têm quase 11 mm de espessura. Assim, os usuários podem trabalhar, jogar ou criar em qualquer lugar. O modelo de 13 polegadas oferece o máximo de portabilidade, enquanto o modelo de 15 polegadas tem mais espaço na tela para multitarefa. Existe um tamanho perfeito para todo mundo, de estudantes com várias aulas por dia a profissionais que preferem uma tela maior.
    <br> </br> Linda tela Liquid Retina: o MacBook Air vem com uma tela Liquid Retina de 13,6 polegadas ou 15,3 polegadas com até 500 nits de brilho, suporte a um bilhão de cores e até o dobro de resolução em comparação com os notebooks PC. O conteúdo ganha mais detalhes, e o texto fica supernítido.
       <br> </br> Compatibilidade com até dois monitores externos: o MacBook Air com M3 agora conecta até dois monitores externos quando está fechado — ideal para usuários corporativos ou qualquer pessoa que precise de várias telas para multitarefa em diferentes apps ou visualização de diversos documentos ao mesmo tempo.
    <br> </br> Conexões versáteis: o MacBook Air com M3 conta com Wi-Fi 6E, que oferece até o dobro de velocidade no download da geração anterior. Além disso, inclui uma porta MagSafe para recarga, duas portas Thunderbolt para conectar acessórios e uma entrada de 3,5 mm para fones de ouvido.
       <br> </br> Câmera, microfones e alto-falantes: com uma câmera FaceTime HD de 1080p, os usuários ficam bem em qualquer situação, seja uma conversa com amigos e a família ou uma reunião de trabalho com colegas de outros lugares do mundo. O som também fica melhor graças ao conjunto de três microfones e maior clareza na voz em chamadas de áudio e vídeo. O MacBook Air tem um sistema de som envolvente compatível com Áudio Espacial e Dolby Atmos para criar uma experiência tridimensional em filmes e música.      <br> </br> Magic Keyboard e Touch ID: o Magic Keyboard retroiluminado é confortável e silencioso. As teclas de função têm o mesmo tamanho do restante do teclado. E ele vem com o Touch ID, uma forma rápida, fácil e segura de desbloquear o Mac, iniciar sessão em apps e sites e fazer compras usando o Apple Pay com apenas um toque.</p>
 </p>
       <br></br>
       <br></br> 
       <br></br>
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