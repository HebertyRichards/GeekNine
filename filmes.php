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

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmes</title>
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet" type="text/css" />
  <link href="filmes.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/png" href="imagens/file.png">
</head>

<body>
  <style>
    .filme-carousel {
      padding: 0;
      display: flex;
      justify-content: space-between;
      margin: 0 10px;
    }
    
    .filme-carousel a {
      margin: 0 10px; 
    }
    
    .container-a {
     width: 80%;
    margin: 0 auto;
    justify-content: center;
}
    
    .filme-carousel img {
      margin-bottom: 0px;
      max-width: 100%; 
      height: auto;
      max-height: 250px;
    }
  </style>
  
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
<div class="container-a" align="center">
    <h1>FILMES</h1>
    <p> Ação </p>
    <div class="filme-carousel">
    <a href="Matador de Aluguel.php"><img src="imagens/Matador de Aluguel.jpg" alt="Matador de Aluguel"></a>
    <a href="Renegados.php"><img src="imagens/Renegados.png" alt="Renegados"></a>
    <a href="Invasão a Casa Branca.php"><img src="imagens/Casa Branca.png" alt="Casa Branca"></a>
    <a href="VFX.php"><img src="imagens/VFX.png" alt="VFX"></a>
    <a href="O Protetor.php"><img src="imagens/O Protetor.png" alt="O Protetor"></a>
    <a href="Missão Impossivel.php"><img src="imagens/Missão Impossivel.png" alt="Missão Impossivel"></a>
    <a href="John Wick 4.php"><img src="imagens/John Wick 4.png" alt="John Wick 4"></a>
    <a href="UltimoHomem.php"><img src="imagens/UltimoHomem.png" alt="UltimoHomem"></a>
    <a href="Lift.php"><img src="imagens/Lift.png" alt="Lift"></a>
      <a href="ProjetoGemini.php"><img src="imagens/ProjetoGemini.png" alt="ProjetoGemini"></a>
    <a href="Donzela.php"><img src="imagens/Donzela.png" alt="Donzela"></a>
    <a href="Matrix.php"><img src="imagens/Matrix.png" alt="Matrix"></a>
    <a href="Exterminador do Futuro.php"><img src="imagens/Exterminador.png" alt="Exterminador"></a>
    <a href="Duro de Matar.php"><img src="imagens/Duro de Matar.png" alt="Duro de Matar"></a>
    <a href="Tropa de Elite.php"><img src="imagens/Tropa.png" alt="Tropa de Elite"></a>
    </div>
</div>

<div class="container-a" align="center">
    <p> Comédia </p>
    <div class="filme-carousel">
    <a href="Gente Grande.php"><img src="imagens/Gente Grande.png" alt="Gente Grande"></a>
    <a href="Johnny English.php"><img src="imagens/Johnny English 3.0.png" alt="Johnny English 3.0"></a>
    <a href="Um Espião e Meio.php"><img src="imagens/Um Espião e  Meio.png" alt="Um Espião e Meio"></a>
    <a href="Misterio em Paris.php"><img src="imagens/Misterio em Paris.png" alt="Misterio em Paris"></a>
    <a href="Superbad.php"><img src="imagens/Superbad.png" alt="Superbad"></a>
    <a href="Mr.Bean.php"><img src="imagens/Mr.Bean.png" alt="Mr.Bean"></a>
    <a href="ProjetoX.php"><img src="imagens/Projeto X.png" alt="Projeto X"></a>
    <a href="O Zelador Animal.php"><img src="imagens/O Zelador Animal.png" alt="O Zelador Animal"></a>
    <a href="Norbit.php"><img src="imagens/Norbit.png" alt="Norbit"></a>
    <a href="OPequenino.php"><img src="imagens/OPequenino.png" alt="OPequenino"></a>        
    <a href="Inatividade Paranormal.php"><img src="imagens/Inatividade.png" alt="Inatividade"></a>
    <a href="Esposa de Mentirinha.php"><img src="imagens/Esposa.png" alt="Esposa"></a>
    <a href="Esqueceram de Mim.php"><img src="imagens/Esqueceram.png" alt="Esqueceram"></a>
    <a href="Dr. Dolittle.php"><img src="imagens/Dr.png" alt="Dr. Dolittle"></a>
    <a href="De volta para o futuro.php"><img src="imagens/Futuro.png" alt="Futuro"></a>
    </div>
</div>

<div class="container-a" align="center">
    <p> Heróis </p>
    <div class="filme-carousel">
    <a href="Madame.php"><img src="imagens/Madame.png" alt="Madame"></a>
    <a href="Vingadores.php"><img src="imagens/Vingadores.png" alt="Vingadores"></a>
    <a href="Aquaman.php"><img src="imagens/Aquaman.png" alt="Aquaman"></a>
    <a href="HomemAranha.php"><img src="imagens/HomemAranha.png" alt="HomemAranha"></a>
    <a href="Doutor Estranho.php"><img src="imagens/Doutor Estranho.png" alt="Doutor Estranho"></a>
    <a href="Pantera Negra.php"><img src="imagens/Pantera Negra.png" alt="Pantera Negra"></a>
    <a href="Thor.php"><img src="imagens/Thor.png" alt="Thor"></a>
    <a href="Dead.php"><img src="imagens/Dead.png" alt="Dead"></a>
    <a href="Flash.php"><img src="imagens/Flash.png" alt="Flash"></a>
    <a href="GuardioesGalaxia.php"><img src="imagens/GuardioesGalaxia.png" alt="GuardioesGalaxia"></a>
    <a href="Logan.php"><img src="imagens/Logan.png" alt="Logan"></a>
    <a href="Incrivel Hulk.php"><img src="imagens/Hulk.png" alt="Hulk"></a>
    <a href="Quarteto Fantastico.php"><img src="imagens/Quarteto.png" alt="Quarteto"></a>
    <a href="Batman e Superman.php"><img src="imagens/Batman.png" alt="Batman"></a>
    <a href="Capita Marvel.php"><img src="imagens/Capita.png" alt="Capita"></a>
    </div>
    </div>

<div class="container-a" align="center">
    <p> Suspense </p>
    <div class="filme-carousel">
    <a href="Corra.php"><img src="imagens/Corra.png" alt="Corra"></a>
    <a href="Sociedade da Neve.php"><img src="imagens/Neve.png" alt="Neve"></a>
    <a href="Agente Stone.php"><img src="imagens/Agente Stone.png" alt="Agente Stone"></a>
    <a href="Resgate 2.php"><img src="imagens/Resgate 2.png" alt="Resgate"></a>
    <a href="Emancipation.php"><img src="imagens/Emancipation.png" alt="Emancipation"></a>
    <a href="Oppenheimer.php"><img src="imagens/Oppenheimer.png" alt="Oppenheimer"></a>
    <a href="Interestelar.php"><img src="imagens/Interestelar.png" alt="Interestelar"></a>
    <a href="Fragmentado.php"><img src="imagens/Fragmentado.png" alt="Fragmentado"></a>
    <a href="O Pacto.php"><img src="imagens/Pacto.png" alt="Pacto"></a>
    <a href="ZonadeRisco.php"><img src="imagens/ZonadeRisco.png" alt="ZonadeRisco"></a>                    
    <a href="Anatomia de uma Queda.php"><img src="imagens/Anatomia.png" alt="Anatomia de uma Queda"></a>
    <a href="Jogo Justo.php"><img src="imagens/Jogo.png" alt="Jogo Justo"></a>
    <a href="Mistério em Alto Mar.php"><img src="imagens/Misterio.png" alt="Mistério em Alto Mar"></a>
    <a href="Um Lugar Silencioso.php"><img src="imagens/Lugar.png" alt="Um Lugar Silencioso"></a>
    <a href="Ilha do Medo.php"><img src="imagens/Ilha.png" alt="Ilha do Medo"></a>
    </div>
    </div>

<div class="container-a" align="center">
    <p> Terror </p>
    <div class="filme-carousel">
    <a href="Invocacao do Mal 1.php"><img src="imagens/Invocação do Mal 1.jpg" alt="Invocação do Mal.jpg"></a>
    <a href="Jester.php"><img src="imagens/Jester.png" alt="Jester.png"></a>
    <a href="O Grito.php"><img src="imagens/Grito.png" alt="Grito.png"></a>
    <a href="A freira.php"><img src="imagens/A Freira 2.png" alt="A Freira 2.png"></a>
    <a href="Jogos Mortais.php"><img src="imagens/Jogos Mortais X.png" alt="Jogos Mortais X.png"></a>
    <a href="O Exorcista do Papa.php"><img src="imagens/O Exorcista do Papa.png" alt="O Exorcista do Papa.png"></a>
    <a href="Halloween.php"><img src="imagens/Halloween.png" alt="Halloween.png"></a>
    <a href="Annabelle.php"><img src="imagens/Annabelle 2.png" alt="Annabelle 2.png"></a>
    <a href="ItACoisa.php"><img src="imagens/ItACoisa.png" alt="ItACoisa 2.png"></a>
    <a href="PanicoVI.php"><img src="imagens/PanicoVI.png" alt="PanicoVI.png"></a>              <a href="Exorcista.php"><img src="imagens/Exorcista.png" alt="Exorcista.png"></a>
    <a href="A Morte do Demonio.php"><img src="imagens/Demonio.png" alt="Demonio.png"></a>
    <a href="A hora do Pesadelo.php"><img src="imagens/Pesadelo.png" alt="Pesadelo.png"></a>
    <a href="Telefone Preto.php"><img src="imagens/Telefone preto.png" alt="Telefone preto.png"></a>
    <a href="Sorria.php"><img src="imagens/Sorria.png" alt="Sorria.png"></a>
    </div>
    </div>
  <br></br><br></br>
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.filme-carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
          breakpoint: 500, 
          settings: {
            slidesToShow: 2, 
            slidesToScroll: 1,
          }
        }
        ]
      });
    });
  </script>
</body>
  
</html>
