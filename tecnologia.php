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
  <title>Tecnologia</title>
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
   <div class="slideshow-container" align="center">
      <div class="slide fade">
        <a href = "JBL.php"><img src="imagens/JBL-t.jpeg" alt="imagens/JBL-t.jpeg"></a>
      <div class="text">JBL Quantum Stream Studio é lançado no Brasil; veja o preço do microfone premium
</div>
      </div>
   
        <div class="slide fade">
           <a href = "lançamentosIA.php"><img src="imagens/banner-t.jpeg" alt="imagens/banner-t.jpeg"></a>
      <div class="text">Novos lançamentos da linha apostam em IA</div>
</div>
     
     <div class="slide fade">
            <a href = "SegurançaUrl.php"><img src="imagens/Link malicioso.jpeg" alt="imagens/Link malicioso.jpeg"></a>
     <div class="text" >Link malicioso: 6 dicas para evitar links mal-intencionados na web
</div>
         </div>

      <div class="slide fade">
     <a href = "Saindo do piloto.php"><img src="imagens/Saindo do piloto.jpeg" alt="imagens/Saindo do piloto.jpeg"></a>
      <div class="text">Saindo do piloto automático: rumo a soluções de mobilidade sustentáveis e permanentes</div>
      </div>

      </div>
      <div class="dots-container">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
         <span class="dot"></span>
      </div>
    </div>
   <script>
     document.addEventListener("DOMContentLoaded", function() {
       var slideIndex = 0;
       showSlides();

       function showSlides() {
         var slides = document.getElementsByClassName("slide");
         var dots = document.getElementsByClassName("dot");
         for (var i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";
         }
         slideIndex++;
         if (slideIndex > slides.length) { slideIndex = 1; }
         for (var i = 0; i < dots.length; i++) {
           dots[i].classList.remove("active");
         }
         slides[slideIndex-1].style.display = "block";
         dots[slideIndex-1].classList.add("active");
         setTimeout(showSlides, 5000); 
       }
     });
   </script>

   <div class = "tec">
    <div class="Tec-a" align="center">    
      <h1>MUNDO TEC</h1>
    </div>
     <div class= "teste">
   <a href = "Chip-t.php"><img src="imagens/chip3.jpeg" alt="imagens/imagens/chip3.jpeg" width="300px"></a>
     <div class="text1">Por que Taiwan é tão importante no mercado de chips?
        </div>
     </div>
     <div class= "teste">
      <a href = "tecmed.php"><img src="imagens/tec-med.jpeg" alt="imagens/tec-med.jpeg" width="300px"></a>
       <div class="text1">Cirurgia robótica: saiba tudo sobre a tecnologia
           </div>
        </div>
      <div class= "teste">
      <a href = "Robo.php"><img src="imagens/robo.jpeg" alt="imagens/imagens/robo.jpeg" width="300px"></a>
        <div class="text1">Robô subaquático pode mapear as profundezas do oceano
           </div>
        </div>
    
   <div class="Tec-a" align="center">
       <h1> NOVIDADES</h1>
  </div>
     <div class= "teste">
     <a href = "IA-t.php"><img src="imagens/ia-t.jpeg" alt="imagens/ia-t.jpeg" width="300px"></a>
       <div class="text1">IA: Ameaça desenvolvedores?
       </div>
     </div>
     <div class= "teste">
     <a href = "Adobe.php"><img src="imagens/adobe-t.jpg" alt="imagens/adobe-t.jpg" width="300px"></a>
       <div class="text1">Adobe Premiere Pro
          </div>
        </div>
     <div class= "teste">
      <a href = "apple.php"><img src="imagens/apple-t3.jpeg" alt="imagens/apple-t2.jpeg" width="300px"></a>
        <div class="text1">MacBook Air de 13
   </div>
</div>
  
  <div class = "tec">
  <div class="Tec-a" align="center">
    <h1>TEC GAMER</h1>
  </div>
     <div class= "teste">
        <a href = "Monitor-s.php"><img src="imagens/monitor-s.jpeg" alt="imagens/monitor-s.jpeg" width="300px"></a>
       <div class="text1">Novo monitor gamer ViewSonic
         </div>
       </div>

       <div class= "teste">
      <a href = "ROG-s.php"><img src="imagens/rog-t.jpeg" alt="imagens/rog-t.jpeg" width="300px"></a>
         <div class="text1">ROG Strix Scar 18 (2024)
            </div>
          </div>

          <div class= "teste">
         <a href = "dell.php"><img src="imagens/dell-t.jpeg" alt="imagens/dell-t.jpeg" width="300px"></a>
            <div class="text1">Dell G15 5530
              </div>
            </div>
  </div>
   </div>
  
     >
      </div>
    </div>
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