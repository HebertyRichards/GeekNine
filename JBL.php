<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JBL</title>
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
    <h1 id="h1"> JBL Quantum Stream Studio é lançado no Brasil;<br> veja o preço do microfone premium </h1>
    <div class="chip-b">
      <img src="imagens/jbl-1.jpeg" alt="imagens/JBL">
    </div>
    <div class="chip-c">
      <P>Com três microfones condensadores e taxa de amostragem de 192 kHz/24 bits, a novidade oferece gravação com qualidade de estúdio, trazendo quatro modos de captação de voz. A opção normal é ideal para sessões individuais, enquanto a bidirecional funciona em entrevistas ou quando for necessário captar áudio em ambos os lados do equipamento.</p>
      <p> Já o modo estéreo atende aos usuários que fazem narrações, possibilitando identificar claramente os lados da captação nos fones de ouvido. Por fim, há a alternativa de captação 360º, indicada para as gravações que envolvem a participação de diversas vozes em um mesmo ambiente.</p>
      <p>É possível alternar entre os padrões de gravação pressionando o botão na frente do JBL Quantum Stream Studio, escolhendo a opção mais adequada para as suas necessidades. Outro destaque é o compressor de faixa dinâmica, impedindo que a voz seja cortada caso você fale muito baixo ou exagere no volume.</p>
      <p> Até porque, programar não se resume apenas a escrever linhas de código. Esse trabalho é baseado na somatória da aplicação de lógica e conhecimento técnico com uma dose significativa de criatividade e intuição por parte do profissional. Em outras palavras, os devs precisam saber atuar diante de problemas complexos que exigem uma capacidade resolutiva, que uma máquina ainda não consegue suprir. Embora a inteligência artificial possa ajudar na automação de tarefas rotineiras, ela não é capaz de igualar a criatividade e intuição humana diante dos desafios. Muito pelo contrário, IAs generativas como Chat GPT, por exemplo, não possuem nenhuma inteligência ou qualquer coisa do tipo. Elas são parte de algoritmos sofisticados, treinados com uma grande quantidade de dados e retornam informações baseadas em padrões, ou seja, não há qualquer tipo de consciência.</p>
    </div>
    <div class="chip-b">
      <img src="imagens/JBL-t.jpeg" alt="JBL">
    </div>
    <p> Como o processo de programação precisa envolver as necessidades e demandas dos usuários, é preciso que pontos “externos”, ou do além da tela, também sejam considerados. Sem essa compreensão abrangente do contexto, algo pouco explorado nas aplicações da IA, o trabalho tende a ficar comprometido. Apesar dela ser importante no exercício de sugestão e assistência da codificação, o sensorial humano ainda é fundamental para a tomada de decisões eficazes e implementações assertivas.Outro ponto fundamental que permeia o trabalho dos devs é a questão ética. Os profissionais da área são constantemente desafiados a conjecturar o equilíbrio entre a funcionalidade técnica e a moralidade das suas ações. Assim, itens como a privacidade e segurança dos dados atrelados aos sistemas que estão sendo desenvolvidos representam uma importância significativa no seu dia a dia. Essa capacidade de ponderar os aspectos éticos das aplicações é algo que a IA não possui expertise para orientar e ainda nem está no seu foco de atuação. Por todos esses motivos, posso afirmar claramente que a IA não deve tomar o emprego dos devs a curto prazo. No entanto, com certeza, o desenvolvedor que souber usar ela a seu favor, seja para completar um código ou tirar uma dúvida pontual, irá se sobressair em relação aqueles que ainda não utilizam tais ferramentas. </p>
    <h2 id="sub">Quanto custa o JBL Quantum Stream Studio?</h2>
    <p>Microfone principal da linha Quantum Stream, o lançamento também possui botão para silenciar as transmissões temporariamente, recurso útil para atender uma ligação durante a gravação. Enquanto a função silencioso estiver ativada, as luzes RGB ao redor da grade ficam vermelhas, alertando o usuário.</p>
    <p>Ele tem, ainda, um medidor RGB VU monitorando os níveis de volume em tempo real, permitindo realizar os ajustes com rapidez. Mais funcionalidades estão disponíveis por meio do app JBL QuantumENGINE, onde é possível configurar a equalização, o volume e a iluminação, habilitar a redução de ruídos e muito mais.</p>
    <p>O novo microfone da JBL possui montagem universal, podendo ser usado com o suporte que o acompanha, em um pedestal articulado ou sistema de grampo em C. Basta rosqueá-lo em qualquer uma das opções, deixando-o pronto para uso nas gravações e streaming.</p>
    <p>Disponível na loja online da marca, o JBL Quantum Stream Studio está à venda com preço sugerido de R$ 849.</p>
  </div>
  <div class="container-a">
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