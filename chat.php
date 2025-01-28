<?php
$db = new SQLite3('usuarios.sqlite');
$db->exec("CREATE TABLE IF NOT EXISTS messages (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, message TEXT, timestamp TEXT)");
session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit;
}

$nome_usuario = $_SESSION['nome'];

if (isset($_POST['message'])) {
    $message = htmlspecialchars(trim($_POST['message']));
    $stmt = $db->prepare("INSERT INTO messages (username, message, timestamp) VALUES (:username, :message, datetime('now'))");
    $stmt->bindValue(':username', $nome_usuario);
    $stmt->bindValue(':message', $message);
    $stmt->execute();
}

$result = $db->query("SELECT * FROM messages ORDER BY timestamp DESC LIMIT 50");
$messages = [];
while ($row = $result->fetchArray()) {
    $messages[] = [
        'username' => $row['username'],
        'message' => $row['message'],
        'timestamp' => $row['timestamp'],
    ];
}

$messages = array_reverse($messages);
?>

<!DOCTYPE html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chat</title>
      <link href="style.css" rel="stylesheet" type="text/css" />
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
      <div class="search-container">
        <form action="" method="GET">
          <input type="text" placeholder="Digite sua busca" name="Digite sua busca">
          <input type="submit" value="">
        </form>
      </div>
      <br><br>
    <div class="chat-container">
        <div class="messages">
            <div class="msg2">
            <h1>Chat Global</h1>
            </div>
            <?php foreach ($messages as $message): ?>
                <div class="message">
                    <span class="username"><?php echo htmlspecialchars($message['username']); ?>:</span>
                    <span class="message-text"><?php echo htmlspecialchars($message['message']); ?></span>
                    <span class="timestamp"><?php echo date('H:i:s', strtotime($message['timestamp'])); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="msg">
        <form method="post" action="">
            <input type="text" name="message" placeholder="Type your message..." required>
            <button type="submit">Enviar</button>
        </form>
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