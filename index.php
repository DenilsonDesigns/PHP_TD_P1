<?php
include("./inc/functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- <meta http-equiv="refresh" content="10"> -->

</head>

<body>
  <div class="container">
    <div id="quote-box">
      <!-- <p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.</p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p> -->
      <?php
      printQuote();
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)">Show another quote</button>
  </div>
  <script src="script.js" type="text/javascript">

  </script>
</body>


</html>