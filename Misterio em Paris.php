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
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mistério Em Paris </title>
   <link href="games1.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="imagens/file.png">
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
    <br><br><br><br>
  <div class="container-a">
    <div class="div1">
    <img src="imagens/Misterio em Paris.png" alt="Misterio em Paris">
    <h1>Mistério em Paris</h1>
  </div>
      <div class = "rating"> 
      <p> 2023 </p>
      <p> 1h, 30m </p>
        <a href="https://www.imdb.com/title/tt15255288/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_mist%25C3%25A9rio%2520em%2520paris">5.7/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Adam Sandler.png" alt="Adam Sandler">
      <span>Adam Sandler</span>    
        <img src="imagens/Jennifer Aniston.png" alt="Jennifer Aniston">
      <span>Jennifer Aniston</span>
        <img src="imagens/Mark Strong.png" alt="Mark Strong">
      <span>Mark Strong</span>
        <img src="imagens/Mélanie Laurent.png" alt="Mélanie Laurent">
      <span>Mélanie Laurent</span>
  </div>
  <div class="texto1">
    <p>Mistério em Paris é a sequência de Mistério no Mediterrâneo. Prepare seu passaporte e mochila de aventuras, Nick Spitz (Adam Sandler) e Audrey Spitz (Jennifer Aniston) estão de malas prontas para resolver outro mistério internacional. Depois dos eventos do primeiro longa, Nick e Audrey sofrem com o fracasso da agência de investigações que eles abriram. Agora detetives profissionais e em tempo integral, tentando fazer a agência de investigação ficar mais popular, dessa vez uma viagem para Paris cai no colo do casal. Quando tudo parece estar desandando de vez, o amigo em comum Maharajah (Adeel Akhtar) entra em contato comunicando que irá se casar; e o casal parte para um casamento indiano milionário com todo luxo que os convidados têm direito. Mas Maharajah é sequestrado no meio de sua própria festa de casamento e é então que começa uma caçada internacional da dupla de investigadores para resgatar</p>
  </div>
  </div>
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
