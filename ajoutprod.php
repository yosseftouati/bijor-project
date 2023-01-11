<?php 
// session_start();
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

?>
<form>
  <div class="form-group">
  <input type="text" name="tit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre du produit"><br>
  </div>
  <div class="form-group">
    <input type="text" name="des" class="form-control" id="exampleInputPassword1" placeholder="Description"><br>
  </div>
  <div class="form-group">
    <input type="text" name="ima" class="form-control" id="exampleInputPassword1" placeholder="Image"><br>
  </div>
  <div class="form-group">
    <input type="text" name="pri" class="form-control" id="exampleInputPassword1" placeholder="Prix"><br>
  </div>
  <div class="form-group">
    <input type="text" name="qua" class="form-control" id="exampleInputPassword1" placeholder="Quantité"><br>
  </div>
  <button name="btnSubmit" type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
// if(isset($_POST['btnSubmit']))
// {
    $query="INSERT INTO produits (`titre`, `description`, `image`, `prix`, `quantite`) VALUES (,?,?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt -> execute([$titre,$description,$image,$prix,$quantite]);
    var_dump($stmt);
// }

