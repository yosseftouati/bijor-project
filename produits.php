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
$produits = $conn->query("SELECT * FROM produits")->fetchAll();
?>




<br>
<div id="border">
    <h3 id="tit-prod" style="margin-left:171px">Découvrez notre mine d'or de bijoux pour satisfaire tous vos besoins !</h3>
    <br><br>
    <div class="row row-cols-1 row-cols-md-4 g-4">
     <?php foreach($produits as $produit): ?>
    <div class="col">
     <a  style="text-decoration: none" href="detail.php?id=<?= $produit['id']?>">
        <div  class="card">
            <img src="<?= $produit['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $produit['titre']?></h5><br>
                <p class="card-text"><?= $produit['prix']?>€</p> 
            </div>
        </div>
     </a>
    </div>
        <?php endforeach ?>
    </div>
    <br><br>
</div>

<?php include('footer.php')?>
