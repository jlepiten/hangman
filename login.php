<?php
// Starts the session.
// If the user closes the session, session data will be erased.
session_start();
?>

<html>

<head>
  <title>hangman.</title>
  <link type="text/css" rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class = "container">

    <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
      <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus>
      </br>
      <input type = "password" class = "form-control" name = "gamekey" placeholder = "gamekey: iluvphp" required>
      </br>
      <button type = "submit" name = "play">Play</button>
    </form>
    </br>

    <?php
    // Starts the game when user clicks the play button.
    // Also checks if the password is correct - right now it's just a static password (iluvphp).
    if (isset($_POST['play']) && !empty($_POST['username']) && !empty($_POST['gamekey'])) {
      if ($_POST['gamekey'] == 'iluvphp') {
        $_SESSION['valid'] = true;
        $_SESSION['username'] = $_POST['username'];

        echo 'hangman will start in about 5 secs. if not, click <a href="./hangman.php">here</a>.';
        header('refresh: 5; url = hangman.php');
      } else {
        echo 'the password is "iluvphp" ';
      }
    }
    ?>

  </div>
</body>

</html>
