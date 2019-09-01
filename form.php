<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    file_put_contents($_GET['title'], $_GET['description']);
      echo $_GET['title'];
      echo "<br>";
      echo $_GET['description'];
     ?>
  </body>
</html>
