<?php

require 'data.php';

$row = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

  // die(var_dump($result));

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["Name"]. ", " . $row["Gender"]. "<br>";
    }
  } else {
      echo "0 results";
  }
  $conn->close();

}
