<?php

  //connect to mySQL
  $con = mysqli_connect("127.0.0.1","root","luvmom1","tagBoard");

  if(mysqli_connect_errno()) {
    echo "Failed to connect: ".mysqli_connect_error();
  }
?>