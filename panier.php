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

$produits = $conn->query("SELECT * FROM panier,produits WHERE produits.id=panier.id_produit")->fetchAll();

$nombre_produits = 0;
foreach($produits as $panier){
  $nombre_produits++;
}

if(sizeof($produits)==0)
{
   echo '<div class="empty-cart"><br><br><br>
  <h1>Votre panier est vide</h1><br>
  <a href="produits.php">Revenir aux produits</a>
</div><br><br><br><br><br><br><br><br>';
}
else{
  
  echo '<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Produit</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix unitaire</th>
      <th scope="col">Prix total</th>
      <th scope="col">Retirer un article</th>
    </tr>
  </thead>
  <tbody>';
      $total=0;
      foreach($produits as $panier):{
      $prixUnit = intval( $panier['prix']);
      $prixQtt= intval($panier['quantite_selectionne']);
      $prixTot = $prixQtt * $prixUnit;
      $total += $prixTot;
      $nombre_produits++;
      $_SESSION['nombre_produits'] = $nombre_produits;
      
      ?>
     <tr>

        <th><img src="<?= $panier['image']?>" class="card-img-top" alt="..."></th>
        <th><?= $panier['titre']?></th>
        <th><?= $panier['quantite_selectionne']?></th>
        <th><?= $panier['prix']?>€</th>
        <th><?php echo $prixTot ?>€</th>
        <th>
          <a style="color: white" href="supprimer.php?id=<?= $panier['id'] ?>">Supprimer</a>
        </th>
     </tr>
   
     <?php }
     endforeach;
     ?>
<br><br>
  </tbody>
</table><br>
<div id="total"><h4 >Total du panier : <b><?php echo $total ?>€</b></h4></div>
<a href="valider.php"><button id="bouton3">Valider mon panier</button></a>

<br><br><br>

<?php }
include('footer.php');









