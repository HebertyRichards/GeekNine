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
  <title> Novidade saúde</title>
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
           <h1> Novidade saúde: Cirurgia robótica saiba tudo sobre a tecnologia</h1>
       </div>
        <div class = "chip-b">
       <img src="imagens/tec-med.jpeg" alt="imagens/tec-med.jpeg" width="400px">
         </div>
        <div class = "chip-c" align="center">
          <div class = "sub">
           <h2>O que é a cirurgia robótica?</h2>
           </div>
         <p>A cirurgia robótica é uma operação assistida por robôs. É uma técnica minimamente invasiva, em que todas as manobras são conduzidas pelo cirurgião e executadas  por meio do robô, com controle de movimentos feito por joysticks. Mesmo entre as plataformas de diversos fabricantes, o ponto em comum é o carro que vai junto ao paciente onde se acoplam a câmera e os braços robóticos, que permitem operar através de incisões cada vez menores. O console do cirurgião onde o profissional controla os braços, câmera e todos os instrumentos com uma visão HD 3D, e todos os seus movimentos, são filtrados para evitar tremores. Atualmente, é a técnica mais moderna no que se refere a procedimentos minimamente invasivos.Esse formato de cirurgia é indicado para algumas doenças que necessitam de tratamento cirúrgico, mas o profissional médico precisa ter a habilitação específica para poder realizá-la por via robótica. Estão incluídas as operações para o tratamento do câncer, como por exemplo, o câncer de ovário, de endométrio ou do colo do útero. Todas elas  podem ser realizadas sem precisar de grandes incisões, como aconteceria na abordagem aberta.</p>
          <div class = "sub">
            <h2>Cirurgia robótica versus laparoscópica: diferenças</h2>
            </div>
           <p>A cirurgia assistida por robôs não foi o primeiro procedimento minimamente invasivo que surgiu na Medicina. Tudo começou com as operações laparoscópicas, que exigem apenas pequenas incisões na barriga do paciente. Tanto é que a palavra vem do grego laparos, que significa abdômen. Nesta técnica, o cirurgião utiliza instrumentos com uma haste reta e uma câmera para fazer o procedimento. Assim, é possível mexer para cima ou para baixo, fazendo essa manipulação à beira do leito.Na cirurgia robótica, é parecido. Tudo começa com as pequenas incisões. A diferença está na plataforma robótica, que mantém os instrumentos ao lado do leito, não o cirurgião. O profissional está sentado em um console, de onde comanda o robô que, por sua vez, transmite os movimentos às pinças.</p>
          <p>  Além disso, os instrumentos podem se mexer em todas as direções. Com isso, há mais liberdade para operar e uma precisão maior nos procedimentos mais complexos. Outra característica é a visualização tridimensional (3D) da câmera, que oferece uma visão e percepção de espaço melhores ao médico. Ainda é importante observar que o cirurgião controla todos os movimentos do console. Portanto, o robô nunca age sozinho, independentemente da inteligência artificial. A plataforma robótica é semelhante a um assistente estacionário. O cirurgião segura os instrumentos e a comunicação dos movimentos é feita por meio da tecnologia.</p>
           <div class = "sub">
           <h2>Quais os diferenciais da cirurgia robótica?</h2>
           </div>
           <p>O processo de realização de uma cirurgia robótica é mais preciso devido a todos os equipamentos e instrumentos disponíveis. A câmera 3D garante uma visão com maior profundidade e definição. Ao mesmo tempo, o joystick (console) permite um controle exato dos movimentos a serem realizados.Por sua vez, os braços do robô trazem estabilidade às mãos do profissional. Com isso, possíveis tremores deixam de impactar o trabalho executado.
          <em><p>    “A cirurgia robótica, do ponto de vista do paciente, permite um procedimento mais preciso, com melhor acesso e visualização das estruturas operadas, o que leva a menor risco de intercorrências no perioperatório (período de tempo desde a decisão da cirurgia até o retorno do paciente às atividades normais), sejam sangramentos, dores ou alterações de sensibilidade”, explica o Dr. Nam." </p></em>

<em> <p> “Além disso, como procedimento minimamente invasivo, é realizada com incisões menores que proporcionam uma recuperação mais breve, mesmo em procedimentos maiores”, complementa o especialista. A seguir, especificamos mais a fundo as vantagens e os diferenciais dessa prática tecnológica."</p></em>
                <div class = "sub">
                 <h2>Benefícios da cirurgia robótica para os pacientes</h2>
                 </div>
                <p> Os pacientes são os maiores beneficiados da cirurgia assistida por robôs. O procedimento minimamente invasivo diminui, por exemplo, a dor e o desconforto do pós-operatório. Confira as principais vantagens para quem se submete a esse tipo de operação: </p>
                <div class = "sub">
                <h4>Redução de complicações</h4>
                </div>

                <div class = "sub">
                 <h2>Benefícios da cirurgia robótica para os pacientes</h2>
                 </div>
                <p> Os pacientes são os maiores beneficiados da cirurgia assistida por robôs. O procedimento minimamente invasivo diminui, por exemplo, a dor e o desconforto do pós-operatório. Confira as principais vantagens para quem se submete a esse tipo de operação: </p>
                <div class = "sub">
                <h4>Redução de complicações</h4>
                </div>
             <p>A cirurgia robótica faz pequenas incisões, o que causa menos dor ao paciente. Além disso, pela precisão e qualidade do método, há menor risco de sangramentos e, como em muitos procedimentos minimamente invasivos, menor taxa de infecção. O trauma cirúrgico é atenuado e, com isso, o paciente se recupera de forma mais célere. Vale lembrar que as incisões menores também reduzem a formação de aderências e tecidos cicatriciais. Isso é importante para a qualidade de vida dos pacientes, já que essas complicações geram dor e outros incômodos.
                </p>
             <div class = "sub">
              <h4>Diminuição do tempo de internação e recuperação</h4>
              </div>
             <p>O paciente tem a oportunidade de um tempo de permanência baixo no hospital. A depender da complexidade do procedimento, pode receber alta no mesmo dia e retornar às atividades diárias mais rapidamente. Para se ter uma ideia, em alguns procedimentos a recuperação chega a ser 50% mais ágil em comparação à abordagem aberta.</p>

             <div class = "sub">
              <h4>Melhores resultados estéticos</h4>
              </div>
             <p>As incisões menores favorecem esteticamente os pacientes no pós-operatório. Em vez de um corte extenso, a cicatriz pode ficar praticamente imperceptível.</p>
             <div class = "sub">
              <h4>Segurança</h4>
              </div>
             <p>Os benefícios listados até aqui demonstram que o procedimento cirúrgico via robótica é bastante seguro, mas ainda há outros detalhes relevantes. Por exemplo: a  plataforma utilizada contém componentes projetados para reduzir os riscos das operações realizadas, como a trava de segurança que evita movimentos caso o médico desvie o seu rosto da tela de controle. Outra característica importante é que apenas cirurgiões certificados e com treinamento específico realizam as cirurgias robóticas. Assim, é preciso passar por várias etapas de capacitação, como por exemplo a realização de operações por meio de simulador e acompanhamento de proctors (profissionais mais experientes) durante dezenas de procedimentos. </p>
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