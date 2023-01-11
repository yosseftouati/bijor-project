<?php

include('navbar.php');
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bijor", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$id = (int) $_GET['id'];

$stmt = $conn->prepare("DELETE FROM panier WHERE id_produit = ?");
$stmt->bindParam(1, $id);
$stmt->execute();

header("Location: panier.php");
exit;

?>