<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Novidade saúde</title>
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
    <h1 id="h1"> Novidade saúde: Cirurgia robótica saiba tudo sobre a tecnologia</h1>
    <div class="chip-b">
      <img src="imagens/tec-med.jpeg" alt="TecMed">
    </div>
    <div class="chip-c">
      <h2 id="sub">O que é a cirurgia robótica?</h2>
    </div>
    <p>A cirurgia robótica é uma operação assistida por robôs. É uma técnica minimamente invasiva, em que todas as manobras são conduzidas pelo cirurgião e executadas por meio do robô, com controle de movimentos feito por joysticks. Mesmo entre as plataformas de diversos fabricantes, o ponto em comum é o carro que vai junto ao paciente onde se acoplam a câmera e os braços robóticos, que permitem operar através de incisões cada vez menores. O console do cirurgião onde o profissional controla os braços, câmera e todos os instrumentos com uma visão HD 3D, e todos os seus movimentos, são filtrados para evitar tremores. Atualmente, é a técnica mais moderna no que se refere a procedimentos minimamente invasivos.Esse formato de cirurgia é indicado para algumas doenças que necessitam de tratamento cirúrgico, mas o profissional médico precisa ter a habilitação específica para poder realizá-la por via robótica. Estão incluídas as operações para o tratamento do câncer, como por exemplo, o câncer de ovário, de endométrio ou do colo do útero. Todas elas podem ser realizadas sem precisar de grandes incisões, como aconteceria na abordagem aberta.</p>
    <h2 id="sub">Cirurgia robótica versus laparoscópica: diferenças</h2>
    <p>A cirurgia assistida por robôs não foi o primeiro procedimento minimamente invasivo que surgiu na Medicina. Tudo começou com as operações laparoscópicas, que exigem apenas pequenas incisões na barriga do paciente. Tanto é que a palavra vem do grego laparos, que significa abdômen. Nesta técnica, o cirurgião utiliza instrumentos com uma haste reta e uma câmera para fazer o procedimento. Assim, é possível mexer para cima ou para baixo, fazendo essa manipulação à beira do leito.Na cirurgia robótica, é parecido. Tudo começa com as pequenas incisões. A diferença está na plataforma robótica, que mantém os instrumentos ao lado do leito, não o cirurgião. O profissional está sentado em um console, de onde comanda o robô que, por sua vez, transmite os movimentos às pinças.</p>
    <p> Além disso, os instrumentos podem se mexer em todas as direções. Com isso, há mais liberdade para operar e uma precisão maior nos procedimentos mais complexos. Outra característica é a visualização tridimensional (3D) da câmera, que oferece uma visão e percepção de espaço melhores ao médico. Ainda é importante observar que o cirurgião controla todos os movimentos do console. Portanto, o robô nunca age sozinho, independentemente da inteligência artificial. A plataforma robótica é semelhante a um assistente estacionário. O cirurgião segura os instrumentos e a comunicação dos movimentos é feita por meio da tecnologia.</p>
    <h2 id="sub">Quais os diferenciais da cirurgia robótica?</h2>
    <p>O processo de realização de uma cirurgia robótica é mais preciso devido a todos os equipamentos e instrumentos disponíveis. A câmera 3D garante uma visão com maior profundidade e definição. Ao mesmo tempo, o joystick (console) permite um controle exato dos movimentos a serem realizados.Por sua vez, os braços do robô trazem estabilidade às mãos do profissional. Com isso, possíveis tremores deixam de impactar o trabalho executado.
    <p> “A cirurgia robótica, do ponto de vista do paciente, permite um procedimento mais preciso, com melhor acesso e visualização das estruturas operadas, o que leva a menor risco de intercorrências no perioperatório (período de tempo desde a decisão da cirurgia até o retorno do paciente às atividades normais), sejam sangramentos, dores ou alterações de sensibilidade”, explica o Dr. Nam." </p>
    <p> “Além disso, como procedimento minimamente invasivo, é realizada com incisões menores que proporcionam uma recuperação mais breve, mesmo em procedimentos maiores”, complementa o especialista. A seguir, especificamos mais a fundo as vantagens e os diferenciais dessa prática tecnológica."</p></em>
    <h2 id="sub">Benefícios da cirurgia robótica para os pacientes</h2>
    <p> Os pacientes são os maiores beneficiados da cirurgia assistida por robôs. O procedimento minimamente invasivo diminui, por exemplo, a dor e o desconforto do pós-operatório. Confira as principais vantagens para quem se submete a esse tipo de operação: </p>
    <h4 id="sub">Redução de complicações</h4>
    <h2 id="sub">Benefícios da cirurgia robótica para os pacientes</h2>
    <p> Os pacientes são os maiores beneficiados da cirurgia assistida por robôs. O procedimento minimamente invasivo diminui, por exemplo, a dor e o desconforto do pós-operatório. Confira as principais vantagens para quem se submete a esse tipo de operação: </p>
    <h4 id="sub">Redução de complicações</h4>
    <p>A cirurgia robótica faz pequenas incisões, o que causa menos dor ao paciente. Além disso, pela precisão e qualidade do método, há menor risco de sangramentos e, como em muitos procedimentos minimamente invasivos, menor taxa de infecção. O trauma cirúrgico é atenuado e, com isso, o paciente se recupera de forma mais célere. Vale lembrar que as incisões menores também reduzem a formação de aderências e tecidos cicatriciais. Isso é importante para a qualidade de vida dos pacientes, já que essas complicações geram dor e outros incômodos.
    </p>
    <h4 id="sub">Diminuição do tempo de internação e recuperação</h4>
    <p>O paciente tem a oportunidade de um tempo de permanência baixo no hospital. A depender da complexidade do procedimento, pode receber alta no mesmo dia e retornar às atividades diárias mais rapidamente. Para se ter uma ideia, em alguns procedimentos a recuperação chega a ser 50% mais ágil em comparação à abordagem aberta.</p>
    <h4 id="sub">Melhores resultados estéticos</h4>
    <p>As incisões menores favorecem esteticamente os pacientes no pós-operatório. Em vez de um corte extenso, a cicatriz pode ficar praticamente imperceptível.</p>
    <h4 id="sub">Segurança</h4>
    <p>Os benefícios listados até aqui demonstram que o procedimento cirúrgico via robótica é bastante seguro, mas ainda há outros detalhes relevantes. Por exemplo: a plataforma utilizada contém componentes projetados para reduzir os riscos das operações realizadas, como a trava de segurança que evita movimentos caso o médico desvie o seu rosto da tela de controle. Outra característica importante é que apenas cirurgiões certificados e com treinamento específico realizam as cirurgias robóticas. Assim, é preciso passar por várias etapas de capacitação, como por exemplo a realização de operações por meio de simulador e acompanhamento de proctors (profissionais mais experientes) durante dezenas de procedimentos. </p>
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