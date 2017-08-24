<?php include 'database.php'; ?>

<?php
    if(isset($_POST['name']) && isset($_POST['tag'])){
      // prevent sql injection
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $tag = mysqli_real_escape_string($con, $_POST['tag']);
      $date = mysqli_real_escape_string($con, $_POST['date']);

      // Set timezone
      date_default_timezone_set("America/New_York");
      $date = date('h:i:s a', time());
          //inserting into table
      $query = "INSERT INTO tags (name, tag, date)
      VALUES ('$name', '$tag', '$date')";

          //checking to see if it goes into database
      if(!mysqli_query($con, $query )) {
        echo "Error: ".mysqli_error($con);
      } else {
        echo '<li>' .$name.  ': ' .$tag.  '   [ '.$date. ' ] </li>';
      }

    }
