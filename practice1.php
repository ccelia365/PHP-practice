<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>

    <form method="get" action = "practice1.php">
        <input type="text" name="a" value="12"/><br>
        <input type="text" name="name" value="geo"/><br>
        <input type="submit" value="submit"/>
    </form>
   
    <?php 

        $a = $_GET['a'];  // $a = 12
        $name = $_GET['name']; // $name = geo

        echo '<p>' .$a. '</p>';
        echo '<p>' .$name. '</p>';
    ?>

  </body>
  </html>