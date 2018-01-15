<?php
  $db_con = mysqli_connect("localhost", "root", "", "ed_db");
  if(mysqli_connect_errno()){
    die("Could Not Connect To Database" . mysqli_connect_error());
  }
?>