<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>

    <form method="get" action = "practice2.php">
        <input type="text" name="first" value="Mike"/><br>
        <input type="text" name="last" value="Gizzo"/><br>
        <input type="number" name="age" value="12"/><br>
        <input type="number" name="height" value="6.1" step=".01"/><br>
        <input type="submit" value="submit"/>
    </form>

    <?php 

        $first = $_GET['first'];
        $last = $_GET['last'];
        $age = $_GET['age'];
        $height = $_GET['height'];

        echo '<p> Name: ' .$first .' '. $last . '</p>';
        echo '<p> Age: ' .$age. '</p>';
        echo '<p> Height: ' .$height. '</p>';
    ?>

  </body>
  </html>