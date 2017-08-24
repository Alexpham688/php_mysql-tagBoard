<?php include 'database.php'; ?>
<?php
  //create Select query
  $query = "SELECT * FROM tags ORDER BY id ASC";
  $tags = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TAG BOARD</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div id="container">
      <header>
          <h1>TAG BOARD</h1>
      </header>
      <div class="tags">
          <ul>
            <?php while($row === mysqli_fetch_assoc($tags)) : ?>
              <li> <?php //echo $row['name' ];?> :
                   <?php// echo $row['tag']; ?>
                   [<?php //echo $row['date']; ?>]
                </li>
            <?php //endwhile; ?>

          </ul>
      </div>
      <footer>
          <form>
              <label>Name:</label>
              <input type="text" class="name">
              <label>Tag Text</label>
              <input type="text" class="tagInput" value="">
          </form>
          <button class="submit"type="submit">TAG!</button>
      </footer>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>
