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
  <title>Conheça o WooCommerce, uma plataforma versátil para criar a sua loja online</title>
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
     <div class= "chip">
         <div class = "h1" align = "center">
        <h1>Conheça o WooCommerce, uma plataforma versátil<br> para criar a sua loja online </h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/woocommerce.jpeg" alt="imagens/woocommerce.jpeg"width="400px">
      </div>
        <div class = "chip-c" align="center">
    <p>Montar uma loja virtual não precisa ser uma tarefa complexa. Hoje, você pode criar um e-commerce facilmente usando o WooCommerce, uma solução baseada no WordPress. É necessário ter um bom servidor para isso? É. A boa notícia é que a Hostinger oferece tudo o que você precisa em uma hospedagem WooCommerce.</p>
     <div class = "sub">
 <h4>O que é WooCommerce?<h4>
 </div>
   <p>O WooCommerce é um plugin gratuito e de código aberto desenvolvido para que qualquer pessoa possa criar um comércio eletrônico usando o WordPress. A solução permite implementar temas personalizados, cadastrar centenas de produtos, integrar serviços de pagamento e envio de pedidos, acompanhar estatísticas de acesso e muito mais. A existência do WooCommerce causa alguma surpresa, pois existe a crença de que o WordPress serve apenas como plataforma de blogs. Mas a verdade é que esse é um sistema de gerenciamento de conteúdo (CMS) que suporta várias outras aplicações além de blogs, como sites institucionais e lojas online. O WooCommerce se destaca como solução de e-commerce para WordPress por contar com numerosos recursos e ser de fácil utilização. Não é por acaso que cerca de 4 milhões de lojas virtuais de várias partes do mundo são baseadas nessa plataforma.</p>
    <div class = "sub">
    <h4>Quais recursos o WooCommerce oferece para a minha loja?<h4>
    </div>
      <p>O WooCommerce é muito mais do que uma vitrine digital. Ao usar a plataforma, a sua loja online contará com recursos como:</p>
      <p>Cadastro de produtos: você pode cadastrar os produtos ou serviços oferecidos informando SKU (identificação única), preço, categoria (como roupas ou calçados), galeria de fotos, entre outros;<br></br>
      Sistemas de pagamento: o WooCommerce pode ser integrado facilmente a serviços financeiros (gateways) para que a sua loja aceite pagamento por cartão de crédito, Pix e boleto bancário, por exemplo;<br></br>
      Acompanhamento e relatórios: você pode acompanhar o status de cada pedido a qualquer momento, bem como ter acesso a relatórios que te ajudam a criar campanhas de marketing ou a diminuir as desistências;<br></br>
      Otimização para SEO: o WooCommerce tem recursos de SEO (Search engine optimization) para aumentar as chances de a loja aparecer nos primeiros resultados das buscas;<br></br
      Personalização: você pode usar um tema próprio ou pré-pronto, bem como adicionar informações de contato, integração com redes sociais e com plugins de logística, como o dos Correios, e outros recursos para deixar o WooCommerce totalmente adequado ao seu negócio.<br></br>
</p>
      <div class = "chip-b">
      <img src="imagens/woo1.jpg" alt="iimagens/woo1.jpg"width="400px">
        </div>
      <div class = "sub">
      <h4>Vantagens de usar a Hostinger para hospedagem WooCommerce<h4>
      </div>
        <p>Você já sabe que o WooCommerce oferece numerosos benefícios. Mas, para usufruir deles, é importante contratar uma plataforma confiável para a sua hospedagem WooCommerce, afinal, você não vai querer que o e-commerce fique lento ou deixe de funcionar sem explicação.</p>
        <p>É neste ponto que a Hostinger se destaca. Estamos falando de um dos mais renomados serviços de hospedagem de sites do mercado. No que diz respeito ao WooCommerce, a companhia oferece:</p>
        <p>Ativação rápida, com apenas um clique;<br></br>
        Otimização de desempenho com a ferramenta LiteSpeed Cache;<br></br>
        Inteligência artificial que gera descrições de produtos;<br></br>
        CDN gratuita que distribui o conteúdo da loja para os servidores mais próximos do seu público;<br></br>
        Migração gratuita se a loja estiver hospedada em outro servidor;<br></br>
        Firewall, detecção de malwares e proteção contra ataques DDoS<br.</br>.</p>
          <p>Vale destacar que todos os planos de hospedagem WooCommerce da Hostinger são gerenciados, ou seja, contam com servidores já preparados e otimizados para operações de loja virtual baseadas nessa plataforma.</p>
    
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