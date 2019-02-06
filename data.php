<?php
// dit zetten we in een apart bestand zodat we dit ook apart kunnen aanroepen om te testen

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  // die("It works");
}


// meest onbeveiligde methode!!!
$sql = "SELECT * FROM `test_table`";

// gegevens direct opslaan
$result = mysqli_query($conn, $sql);

// var_dump($result);
