<?php
// Starts the session.
// If the user closes the session, session data will be erased.
session_start();

// Array of available words.
$words = array('encapsulation', 'inheritance', 'polymorphism', 'abstraction', 'programming', 'cybersecurity', 'cookies');
// Choose a random word in the array to start the hangman game.
$randInt = rand(0, sizeof($words)-1);
$word = $words[$randInt];

?>

<html>

<head>
  <title>hangman.</title>
  <link type="text/css" rel="stylesheet" href="./style.css" />
</head>

<body>
  <h1>hangman.</h1>

  <div class="container">
    <h2>enter a letter: </h2>
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
      <input type="submit" onclick="" value="a">
      <input type="button" onclick="" value="b">
      <input type="button" onclick="" value="c">
      <input type="button" onclick="" value="d">
      <input type="button" onclick="" value="e">
      <input type="button" onclick="" value="f">
      <input type="button" onclick="" value="g">
      <input type="button" onclick="" value="h">
      <input type="button" onclick="" value="i">
      <input type="button" onclick="" value="j">
      <input type="button" onclick="" value="k">
      <input type="button" onclick="" value="l">
      <input type="button" onclick="" value="m">
      <input type="button" onclick="" value="n">
      <input type="button" onclick="" value="o">
      <input type="button" onclick="" value="p">
      <input type="button" onclick="" value="q">
      <input type="button" onclick="" value="r">
      <input type="button" onclick="" value="s">
      <input type="button" onclick="" value="t">
      <input type="button" onclick="" value="u">
      <input type="button" onclick="" value="v">
      <input type="button" onclick="" value="w">
      <input type="button" onclick="" value="x">
      <input type="button" onclick="" value="y">
      <input type="button" onclick="" value="z">
      <br>
      <input type="button" value="reset">
      <input type="button" value="leaderboard">
      <input type="button" value="exit">
    </form>
  </div>

  <div class="user_feedback">
    <h2>letters used:</h2>

    <!-- php script to generate blank spaces -->
    <?php
    for ($i = 0; $i < strlen($word); $i++) {
      if (isset($_POST['a'])) {
        echo 'a  ';
      } else {
        echo '__ ';
      }
    }
    ?>
  </div>
</body>

</html>
