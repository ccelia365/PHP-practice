<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

  <form method="post" action = "practice3.php">
        First name: <input type="text" name="first_name"/><br>
        Last name: <input type="text" name="last_name"/><br>
        Age: <input type="number" name="age"/><br>
        Height: <input type="number" name="height" step=".01"/><br>
        Weight: <input type="number" name="weight" step=".01"/><br>
        <input type="submit" value="submit"/>
    </form>
   
    <?php 

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        echo '<p> Name: ' .$first_name .' '. $last_name . '</p>';
        echo '<p> Age: ' .$age. '</p>';
        echo '<p> Height: ' .$height. '</p>';
        echo '<p> Weight: ' .$weight. '</p>';
    ?>

  </body>
  </html>