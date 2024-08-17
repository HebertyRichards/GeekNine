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
  <title>Inteligência artificial</title>
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
        <h1> A inteligência artificial vai substituir os desenvolvedores? </h1>
         </div>
    <div class="h3">
           <H3>Entenda como aspectos fundamentalmente humanos podem garantir o futuro da profissão</H3>
    </div>
     <div class = "chip-b">
    <img src="imagens/ia-2.jpeg" alt="imagens/ia-2.jpeg" width="400px">
      </div>
     <div class = "chip-c" align="center">
 <P>Nos últimos meses, o processo de desenvolvimento acelerado da Inteligência Artificial (IA) foi o tema mais debatido no mundo da tecnologia. Se antes as imagens geradas pelo Midjourney eram apenas experimentos distantes, hoje elas já são tão convincentes que começam a se confundir com a realidade. O mesmo pode-se dizer das respostas geradas pelo ChatGPT, que apresentam um impressionante grau de assertividade dia após dia. Mas a pergunta de milhões é: a evolução da IA generativa realmente pode acabar com boa parte dos empregos atuais? Pensando na área tech, o atual potencial trazido por essas plataformas já vem impactando positivamente no trabalho dos desenvolvedores, mas isso não quer dizer que elas estão perto de substituir por completo a expertise dos profissionais. Até porque o grande desafio para desenvolver aplicações críticas, na maioria das vezes, é saber o que fazer e não como executar. Hoje, a IA tem a sua capacidade direcionada na execução. A parte mais analítica ainda não faz parte do escopo delas.</p>

<p> Isso não quer dizer, porém, que a IA não seja valiosa para o mercado de programação. Pelo contrário, a produtividade dos devs que estão utilizando-as têm aumentado consideravelmente, uma vez que ela consegue fazer sugestões de códigos, algoritmos, geração de testes automatizados e até mesmo produção automática de documentação. No entanto, o grande ponto é que o ChatGPT e outras plataformas similares ainda não possuem o pensamento crítico de negócio. Sendo assim, elas não conseguem definir uma arquitetura pensando no contexto e restrições necessárias para a aplicação. Atualmente o seu uso está muito mais atrelado à complementação de código baseado na conjuntura que o profissional já idealizou e desenvolveu.</p>

<p> Até porque, programar não se resume apenas a escrever linhas de código. Esse trabalho é baseado na somatória da aplicação de lógica e conhecimento técnico com uma dose significativa de criatividade e intuição por parte do profissional. Em outras palavras, os devs precisam saber atuar diante de problemas complexos que exigem uma capacidade resolutiva, que uma máquina ainda não consegue suprir.  Embora a inteligência artificial possa ajudar na automação de tarefas rotineiras, ela não é capaz de igualar a criatividade e intuição humana diante dos desafios. Muito pelo contrário, IAs generativas como Chat GPT, por exemplo, não possuem nenhuma inteligência ou qualquer coisa do tipo. Elas são parte de algoritmos sofisticados, treinados com uma grande quantidade de dados e retornam informações baseadas em padrões, ou seja, não há qualquer tipo de consciência.</p>
       <div class = "chip-b">
        <img src="imagens/ia-4.gif" alt="imagens/ia-4.gif" width="500px">
       </div>

<p>  Como o processo de programação precisa envolver as necessidades e demandas dos usuários, é preciso que pontos “externos”, ou do além da tela, também sejam considerados. Sem essa compreensão abrangente do contexto, algo pouco explorado nas aplicações da IA, o trabalho tende a ficar comprometido. Apesar dela ser importante no exercício de sugestão e assistência da codificação, o sensorial humano ainda é fundamental para a tomada de decisões eficazes e implementações assertivas.Outro ponto fundamental que permeia o trabalho dos devs é a questão ética. Os profissionais da área são constantemente desafiados a conjecturar o equilíbrio entre a funcionalidade técnica e a moralidade das suas ações. Assim, itens como a privacidade e segurança dos dados atrelados aos sistemas que estão sendo desenvolvidos representam uma importância significativa no seu dia a dia. Essa capacidade de ponderar os aspectos éticos das aplicações é algo que a IA não possui expertise para orientar e ainda nem está no seu foco de atuação.  Por todos esses motivos, posso afirmar claramente que a IA não deve tomar o emprego dos devs a curto prazo. No entanto, com certeza, o desenvolvedor que souber usar ela a seu favor, seja para completar um código ou tirar uma dúvida pontual, irá se sobressair em relação aqueles que ainda não utilizam tais ferramentas. 
</P>
            </div>
      <br></br>
         <br></br> 
         <br></br>
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