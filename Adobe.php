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
  <title>Adobe Premiere Pro receberá ferramenta de geração de vídeo com IA</title>
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
        <h1> Adobe Premiere Pro receberá ferramenta<br> de geração de vídeo com IA </h1>
    </div>
           <div class="h3"
  <h3>A Adobe está preparando ferramentas de edição de vídeo com IA generativa para o Premiere Pro,<br> permitindo manipulação de conteúdo com texto</h3>
           </div>
          <br></br>
          <br></br>
     <div class = "chip-b">
    <img src="imagens/adobe-t1.png" alt="imagens/adobe-t1.png" width="400px">
      </div>
     <div class = "chip-c" align="center">
 <p>A gigante de software Adobe está se preparando para revolucionar sua plataforma de edição de vídeo Premiere Pro com a introdução de ferramentas de vídeo com inteligência artificial generativa sob sua família Firefly. Esta adição visa permitir que os usuários manipulem conteúdo de vídeo sem esforço por meio de prompts de texto, semelhante ao recurso Preenchimento Generativo do Photoshop. As próximas ferramentas Firefly prometem permitir que os usuários gerem, adicionem ou removam objetos dentro de clipes de vídeo, bem como estendam sua duração de forma contínua. A Adobe não especificou uma data de lançamento concreta para suas novas ferramentas de geração de vídeo, declarando apenas que estão programadas para serem lançadas “este ano”. A gigante de software Adobe está se preparando para revolucionar sua plataforma de edição de vídeo Premiere Pro com a introdução de ferramentas de vídeo com inteligência artificial generativa sob sua família Firefly. Esta adição visa permitir que os usuários manipulem conteúdo de vídeo sem esforço por meio de prompts de texto, semelhante ao recurso Preenchimento Generativo do Photoshop. As próximas ferramentas Firefly prometem permitir que os usuários gerem, adicionem ou removam objetos dentro de clipes de vídeo, bem como estendam sua duração de forma contínua. A Adobe não especificou uma data de lançamento concreta para suas novas ferramentas de geração de vídeo, declarando apenas que estão programadas para serem lançadas “este ano”.
 <p>  A incorporação de integrações de IA de terceiros no Premiere Pro representa uma exploração inicial de colaborações potenciais, de acordo com a Adobe. Esta iniciativa estratégica visa oferecer aos usuários uma maior flexibilidade, permitindo-lhes aproveitar modelos como Pika para estender tomadas ou Sora e Runway AI para gerar imagens complementares. Além disso, a Adobe enfatiza a aplicação de etiquetas de Credenciais de Conteúdo para identificar os modelos de IA específicos utilizados na geração de clipes, garantindo transparência e responsabilidade no processo de edição.</p>
        <div class = "chip-b">
       <img src="imagens/adobe-t2.jpg" alt="imagens/adobe-t2.jpg" width="400px">
         </div>

<p>Além da promessa de ferramentas de geração de vídeo, a Adobe lançou oficialmente seu assistente de inteligência artificial. O recurso foi anunciado em fevereiro, quando recebeu sua versão beta. Este recurso, disponível a partir de US$ 4,99 por mês, promete facilitar a compreensão e extração de informações essenciais de documentos diversos. Além disso, a empresa expandiu sua acessibilidade ao lançar uma versão beta gratuita para dispositivos móveis, permitindo interações por meio de comandos de voz, e integrando o serviço às extensões do Microsoft Edge e Google </p>
       <p> - A Adobe oferece seu assistente de IA para entendimento de documentos a partir de US$ 4,99 por mês, tornando-o acessível a uma ampla gama de usuários.</p>
      <p> -  Junto com a versão para desktop, a Adobe lança uma versão móvel beta gratuita do assistente de IA, permitindo que os usuários interajam por meio de comandos de voz para maior conveniência.</p>
     <p>  - O serviço expande seu alcance integrando-se ao Microsoft Edge e Google Chrome por meio de extensões, garantindo acesso contínuo em diferentes plataformas.</p>
      <p> - Os preços de assinatura são rotulados como “acesso antecipado”, indicando possíveis mudanças no futuro, proporcionando aos usuários flexibilidade e transparência.</p>
      <p> - O assistente de IA, inicialmente lançado em beta em fevereiro, oferece recursos como localização de informações específicas, geração de resumos e fornecimento de citações de PDFs e outros documentos, aprimorando a produtividade do usuário.</p>
     <p> - Projetado para auxiliar contribuintes, consumidores que navegam em acordos de termos de serviço e estudantes compilando materiais de estudo, o assistente de IA atende a diversas necessidades dos usuários.</p>
       <br></br>
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