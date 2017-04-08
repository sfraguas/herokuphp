<?php
  echo "HELLO WORLD!";

  include "connect_sql.php";

  echo "<br> host: " . $server;
  echo "<br> user: " . $username;
  echo "<br> password: " . $password;
  echo "<br> schema: " . $db;
?>
