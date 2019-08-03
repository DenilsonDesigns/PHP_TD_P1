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
  <!-- tag to reload page periodically -->
  <meta http-equiv="refresh" content="10">

</head>

<body>
  <div class="container">
    <div id="quote-box">
      <?php
      // main call to print quote to screen
      printQuote();
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)">Show another quote</button>
  </div>
  <script src="script.js" type="text/javascript">

  </script>
</body>


</html>