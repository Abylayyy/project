<?php
  include("index.php");
?>
<link rel="stylesheet" href="still.css" media="screen" type="text/css" />
<?php
  require_once("connect.php");
?>
<?php
  $count = 0;
  session_unset();
  session_destroy();
?>

<html>
  <body>
    <?php
    if ($count == 0) {
      echo "<p class=\"java\"> The user is logged out!</p>";
    }
    ?>
  </body>
</html>
