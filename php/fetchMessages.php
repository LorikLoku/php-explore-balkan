<?php

  include "connection.php";

  $sql = "SELECT * FROM contactus";
  $result = $conn->query($sql);

  $conn->close();
?>