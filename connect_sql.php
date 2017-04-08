<?php
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);
  $conn = new mysqli($server, $username, $password, $db);

  echo "host: " . $server;
  echo "\n user: " . $username;
  echo "\n password: " . $password;
  echo "\n schema: " . $db;
?>
