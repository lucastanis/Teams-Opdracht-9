<?php
// Auteur Lucas
// Functie: Algemene functies tbv hergebruik

function ConnectDb(){
    echo "connect<br>";

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "bieren";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$Db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  }

return $conn;

function OvzBieren(){

    echo "overzicht<br>";

}

}
?>