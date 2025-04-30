<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Dell G15 5530 | Notebook gamer de entrada no limite do segmento</title>
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
    <h1 id="h1"> Review Dell G15 5530 <br>Notebook gamer de entrada no limite do segmento</h1>
    <div class="chip-b">
      <img src="imagens/dell1.jpeg" alt="Dell">
    </div>
    <div class="chip-c">
      <p>O G15 5530 é o novo notebook gamer da Dell com processador Intel Core i7-13650HX e placa de vídeo NVIDIA GeForce RTX 4050 para rodar jogos em FullHD e boa qualidade gráfica. Mesmo sendo de entrada, a placa da série RTX40 traz suporte ao DLSS 3.5 e frame generator, ferramenta essencial para fluidez acima de 60 FPS nos jogos onde fica faltando aquele último gás, colocando o 5530 na fronteira com modelos intermediários.
        Testei o Dell G15 5530 tanto para jogar quanto para trabalhar e, de maneira geral, fiquei bem satisfeito com o resultado, principalmente para um notebook que custa menos de R$ 10 mil na loja oficial da Dell. Uma funcionalidade interessante — e rara — entre os modelos gamer é o modo de autoincialização ao abrir a tampa, sem a necessidade de pressionar o botão de ligar.
        Os únicos problemas que realmente chamam atenção são a autonomia de bateria extremamente baixa, de pouco mais de 2 horas, e alguns conflitos nas configurações automáticas de overclock. Em uso normal, raramente elas são preocupantes, podendo até ser uma vantagem, mas, em testes específicos, elas estressam o processador acima da temperatura limite, desligando o sistema.
      </p>
    </div>
    <h4 id="sub">Prós
      Modo inicialização rápida<br><br>
      Compatível com DLSS 3.5 e geração de quadros<br><br>
      Relativamente silencioso<br><br>
      BIOS intuitiva<br><br>
      Teclado numérico<br><br>
    </h4>
    <h4 id="sub"> Contras<br><br>
      Alienware Command Center<br><br>
      Bateria de apenas 2h<br><br>
      Superaquecimento em algumas aplicações<br><br>
    </h4>
    <h4 id="sub">Design e construção<h4>
        <p>Praticamente todos os notebooks Dell G Series trazem designs angulados e sóbrios, quase se passando por modelos tipo workstation, e o G15 5530 segue a mesma linha. O chassi em plástico duro e resistente traz bons recortes para entrada e saída de ar nas laterais e traseira, um logo singelo da série G, na lateral esquerda da dobradiça para a tela de 15,6 polegadas com resolução Full HD (1920 x 1080) e taxa de atualização de 165 HZ.</p>
        <p> Um ponto fortíssimo para um notebook gamer, e uma evolução clara sobre gerações anteriores da família G Series, é o quanto o G15 5530 é silencioso, mesmo em operação intensa. Naturalmente, ele eleva a velocidade das ventoinhas, mas o nível de ruído é relativamente baixo, sendo bem confortável utilizá-lo para jogar utilizando as caixas de som estéreo com tecnologiaDolby Atmos.</p>Outro ponto positivo do 5530, mas que já é tradição na linha G de notebooks, é o teclado completo com layout ABNT 2, teclas numéricas e iluminação RGB em 4 zonas. A Dell não utiliza switches mecânicos - e honestamente essa tecnologia ainda é bastante questionável em notebooks -, mas a solução de membrana da série G é uma das mais confortáveis do mercado para digitar, sendo possivelmente a mesma adotada na linha XPS.
        O projeto interno do 5530 assusta a primeira vista, mas faz sentido em uma análise mais cuidadosa. Ao remover a tampa inferior, é possível notar rapidamente onde estão posicionados o conector da bateria, os dois slots NVMe M.2, placa de rede e pentes de memória, facilitando muito o processo de upgrade ou substituição dos componentes.</p>
        <h2 id="sub">"O que acontece se a produção de chips parar"</h2>
        <div class="chip-b">
          <img src="imagens/dell-t.jpeg" alt="Dell">
        </div>
        <p>O mercado de chips já vive uma crise e impacta várias empresas de diferentes setores. Uma possível paralização poderia agravar o cenário. A pandemia de coronavírus impulsionou a venda de dispositivos eletrônicos para as pessoas trabalharem em casa, lembra? Ao mesmo tempo, a indústria automotiva reduziu a demanda por chips no início da pandemia, mas voltou com força no final de 2020.No entanto, as montadoras sentiram dificuldade para conseguir os semicondutores que necessitavam, inclusive modelos mais simples de chips. Em 2022, várias fabricantes pararam e deixaram de produzir veículos devido à falta deles. Um levantamento da consultoria Gartner divulgado em 2021 indicou que a escassez também atrasou o lançamento e a oferta de celulares.</p>
        <h2 id="sub">"O que dizem as principais empresas"</h2>
        <p>De acordo com a agência Reuters, a TSMC disse que suspendeu o trabalho temporariamente em suas fábricas após o terremoto para avaliar os impactos. Ainda nesta quarta, em nota enviada à agência NPR, informou que apenas "um pequeno número de equipamentos foi danificado, em certas unidades", impactando parcialmente as operações. "Em todo caso, não houve prejuízo em ferramentas essenciais", afirmou a empresa.
          A United Microelectronics Corp (UMC), rival da TSMC no país, disse que todos os funcionários estavam seguros e que suas fábricas funcionavam normalmente na última quarta, ainda segundo informações da Reuters. Algumas máquinas foram desligadas, mas a empresa trabalhava para reiniciá-las.
          A NPR apontou que, considerando o volume de produção concentrado no país, analistas de mercado dizem que, mesmo interrupções mínimas pode atrasar o envio da produção e gerar prejuízos de milhões de dólares.</p>
  </div>
  <div class="container-a">
    <h2>OUTRAS NOTICÍAS:</h2>
  </div>
  <div class="news-container">
    <div class="news-item">
      <img src="imagens/eletronicos.jpeg" alt="Eletronicos">
      <h2>Eletrônicos mais populares</h2>
      <p> Site AliExpress com até 92% de desconto</p>
      <a href="eletronicos.php">Leia mais</a>
    </div>
    <div class="news-item">
      <img src="imagens/woocommerce.jpeg" alt="WooCommerce">
      <h2> WooCommerce</h2>
      <p>Descubra o que é o WooCommerce e as vantagens de hospedar a sua loja online com essa plataforma na Hostinger</p>
      <a href="woocommerce.php">Leia mais</a>
    </div>

    <div class="news-item">
      <img src="imagens/moto g24.jpeg" alt="Moto G24">
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