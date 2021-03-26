<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

  <form method="post" action = "practice4.php">
        Title: <input type="text" name="title"/><br>
        Profession: <input type="text" name="profession"/><br>
        Job Grade: <input type="number" name="job_grade"/><br>
        Years of Experience: <input type="number" name="years_experience"/><br>
        <input type="submit" value="submit"/>
    </form>

    <?php 

        $title = $_POST['title'];
        $profession = $_POST['profession'];
        $job_grade = $_POST['job_grade'];
        $years_experience = $_POST['years_experience'];

        echo '<p> Title: ' .$title.'</p>';
        echo '<p> Profession: ' .$profession. '</p>';
        echo '<p> Job Grade: ' .$job_grade. '</p>';
        echo '<p> Years of experience: ' .$years_experience. '</p>';
    ?>

  </body>
  </html>