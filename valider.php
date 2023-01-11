<?php
include('navbar.php');

if(estVisiteurConnecte()){
    ?>
<div class="container">
    <div class="container2">
    <h3>Renseigner vos informations</h3><br>
    <form method="POST" action = "recapinfo.php" >
        <div class="row">
         <div class="col-6">
            <div class="form-group">
                <input type="prenom" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required>
            </div> 
         </div>
        <div class="col-6">

            <div class="form-group">
             <input type="nom" name="nom" class="form-control" id="inputNom" placeholder="Nom" required>
            </div>
            <br>
        </div>
        <br>
        
        <div class="col-6">

            <div class="form-group">
             <input type="tel" name="tel" class="form-control" id="inputTel" placeholder="Téléphone" required>
            </div>
            <br>
        </div>
        <br>
        <div class="col-12">
            <div class="form-group">
             <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="Adresse" required>
        </div>
 <br>
 <div class="row">
 <div class="col-6">
            <div class="form-group">
                <input type="text" name="ville" class="form-control" id="inputVille" placeholder="Ville" required>
            </div>
</div>
<div class="col-6">          
            <div class="form-group">
              <input type="text" name="pays" class="form-control" id="inputPays" placeholder="Pays" required>
            </div>
</div> 
</div> 
<br> 
<div class="col-4">         
            <div class="form-group">
                <input type="text" name="cp" class="form-control" id="inputCP" placeholder="Code postal" required>
            </div>
</div>
  <br>
  <input type="submit" name="suivant" class="btn btn-primary" value="Suivant"></input>
  
</form>



<?php 

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

if(isset($_POST['suivant']))
{
    

    $_SESSION['prenom']=$_POST['prenom'];
    $nom=$_POST['nom'];
    $tel=$_POST['tel'];
    $adresse=$_POST['adresse'];
    $ville=$_POST['ville'];
    $pays=$_POST['pays'];
    $cp=$_POST['cp'];

    $sql = "INSERT INTO compte (prenom, nom, tel, adresse, ville, pays, cp) VALUES (?,?,?,?,?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$prenom, $nom, $tel, $adresse, $ville, $pays, $cp]);?>
    <script LANGUAGE="JavaScript">
         document.location.href="recapinfo.php"
    </script>

</div>
</div>
    <?php }}
    if(!estVisiteurConnecte() && !estAdminConnecte()){
      header('Location:connexion.php');

    }
?>