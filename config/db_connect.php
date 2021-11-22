<?php
// connect to database
$connect = @mysqli_connect('localhost', 'adham', '618753294', 'ninija_pizza');
// check connection
if (!$connect) {
  echo "Connection error: " . mysqli_connect_error();
}
