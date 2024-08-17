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
  <title>Link malicioso: 6 dicas para evitar links mal-intencionados na web </title>
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
        <h1>Link malicioso: 6 dicas para evitar links mal-intencionados na web </h1>
    </div>
     <div class = "chip-b">
    <img src="imagens/Link malicioso.jpeg" alt="imagens/Link malicioso.jpeg"width="400px">
      </div>
     <div class = "chip-c" align="center">
 <p><em>Um estudo divulgado pela Associação de Dados Pessoais e Consumidor (ADDP) revelou que, apenas em 2023, houve um aumento entre 25% e 35% no número de ataques cibernéticos, muitos deles envolvendo URLs. Com isso, a pergunta que fica no ar é: como se prevenir e evitar essas ameaças por meio de link malicioso?

 Caso esteja com essa pergunta na cabeça, confira abaixo algumas dicas que ajudam a evitar esse problema.</em> </p>

      <p>
      A Motorola anunciou nesta semana o celular Moto G24 Power para o mercado brasileiro. O ponto forte do smartphone é sua bateria de 6.000 mAh que, segundo a fabricante, é capaz de ficar 48 horas sem carregar. O Moto G24 Power chega no lançamento com o preço de R$ 999.

      O celular é vendido com um carregador rápido de 30 W com tecnologia TurboPower. Esse acessório promete completar a capacidade da bateria em 1h25. O tempo para chegar a uma carga de 50% é de 32 minutos, segundo a Motorola. A bateria de 6.000 mAh é um upgrade do modelo Moto G24 “não Power”.</p>
       <div class = "sub">
        <h2>1. Verifique se o site usa HTTPS</h2>
         </div>
       <div class = "chip-b">
         <img src="imagens/linkm1.jpeg" alt="imagens/linkm1.jpeg" width="500px">
        </div>

       <p>
         Uma das principais formas de atestar a segurança de um site é verificando se ele possui HTTPS em seu endereço. Essa é uma evolução do antigo HTTP, garantindo uma camada extra de defesa na transmissão de dados entre o site e o navegador e evitando um link malicioso.

         “O HTTPS usa uma criptografia para transmitir os dados entre o servidor de um site/aplicação e a máquina do leitor usuário, garantindo que, em casos de vazamentos, estes dados estejam sempre seguros”, explica Igor de Andrade, especialista em segurança digital da HostGator.

         “O SSL/HTTPS usa uma criptografia assimétrica com chaves públicas e privadas, sendo quase impossível uma descriptografia destes dados”, continua o especialista.
       </p>
       <div class = "sub">
       <h2>2. Usar uma ferramenta de verificação de link</h2>
        </div>
       <p>Caso haja dúvida sobre a segurança de um link recebido por e-mail ou pelo WhatsApp, outra maneira de realizar a conferência é usando uma ferramenta de verificação de link.

         É possível encontrar algumas ferramentas online que ajudem a fazer essa verificação. O URLVoid é uma das mais populares e utiliza bancos de dados de lista de bloqueio e até mesmo agregadores de reputação de sites para as análises. Porém, também é possível usar o Relatório de Transparência do Google ou o Norton SafeWeb com essa finalidade.
         
       </p>
       <div class = "sub">
        <h2>3.Cheque os dados de contato</h2>
         </div>
       <div class = "chip-b">
        <img src="imagens/linkm2.jpeg" alt="imagens/linkm2.jpeg" width="500px">
       </div>
         <p>Se a dúvida é sobre um link recebido via e-mail, também é possível verificar o remetente da mensagem para saber se, de fato, ele existe. Uma das saídas mais práticas é tentar encontrar a empresa que aparece no domínio usando o Google, o que ajudaria a autenticar se o remetente é verídico.

           "Procure analisar com cuidado quem realmente fez o disparo. Além disso, desconfie de e-mails do tipo ‘sua conta vai ser bloqueada’ ou ‘seu nome está sujo’. Isso atrai a atenção para o clique no link malicioso por meio de uma engenharia social", explica o especialista da HostGator.

           "Cuidado com anexos e a digitação de dados sensíveis a partir deste e-mail, já que eles podem vazar a partir deste e-mail", analisa Andrade.
            </p>
         <div class = "sub">
         <h2>4. Observe as avaliações do Google</h2>
         </div>
           <p>Da mesma forma como é possível fazer uma verificação buscando pela empresa no Google, também dá para observar se ela possui notas no sistema de avaliação do buscador.

             Também é recomendado observar as redes sociais. Se a empresa que enviou o link for real, ela certamente terá pelo menos um perfil ativo, o que ajudaria a analisar se o conteúdo recebido pode ser clicado ou não.

             "Usando o Google Safe Browser, você consegue ver históricos de atividade maliciosa e o score de um domínio. Além de ver a pontuação da página, você também pode fazer uma denúncia caso suspeite de algo", avalia Andrade. </p>
         <div class = "sub">
          <h2>5. Avalie a propriedade do domínio</h2>
          </div>
         <p>Por fim, também é importante realizar uma checagem do domínio antes de clicar em um possível link malicioso. Além do Google, dá para utilizar o WHOIS para fazer isso.

           O WHOIS é um site que permite copiar e colar o endereço de um site. Com isso, ele traz informações como responsável pelo registro do domínio, data de registro e até mesmo os dados de contato de quem fez o cadastro.

           "Uma dica importante é ver quem é o detentor daquele domínio, se realmente pertence àquela determinada empresa ou pessoa. Caso seja de uma empresa verdadeira, vai ter o CNPJ da companhia. Um domínio suspeito quase sempre vai ter uma pessoa física e não jurídica, então a atenção deve ser redobrada nesse tipo de investigação.", finaliza Andrade.  </p>
         <div class = "sub">
         <h2>6. Acesse o site apenas por vias seguras</h2>
         </div>
         <p>Esse é um bom caminho para evitar qualquer link malicioso. Caso tenha dúvida sobre o conteúdo recebido por uma mensagem, busque pelo endereço diretamente no Google ou acesse-o com o preenchimento automático do navegador.

           Ao fazer isso, você tem a certeza de acessar a página correta, evitando dores de cabeça e o possível roubo de dados para pessoas mal-intencionadas. </p>
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