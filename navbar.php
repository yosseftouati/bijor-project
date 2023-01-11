<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="shortcut icon" href="./images/icone.PNG" type="image/x-icon">
    <title>Bijouterie en ligne | BIJ'OR</title>
</head>
<body>
<?php 

include('fonction.php');
initSession();

if (estAdminConnecte()){?>
  <div class="container">
     <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
     <a href="index.php"><img width="120" height="50" src="./images/logo.PNG" alt="logo" ></a>
       <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
         <li><a href="index.php" class="nav-link px-2 link-dark">ACCUEIL</a></li>
         <li><a href="produits.php" class="nav-link px-2 link-dark">NOS PRODUITS</a></li>
         <li><a href="ajoutprod.php" class="nav-link px-2 link-dark">AJOUTER PRODUIT</a></li>
         <li><a href="suprprod.php" class="nav-link px-2 link-dark">SUPPRIMER PRODUIT</a></li>
       </ul>
 
       <div class="col-md-3 text-end">
         <a href="deconnecter.php"><button type="button" class="btn btn-primary">DECONNEXION</button></a>
       </div>
     </header>
   </div>

<?php }
if (estVisiteurConnecte()){?>
 <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
   
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <a href="index.php"><img width="120" height="50" src="./images/logo.PNG" alt="logo" ></a>
        <li><a href="index.php" class="nav-link px-2 link-dark">ACCUEIL</a></li>
        <li><a href="produits.php" class="nav-link px-2 link-dark">NOS PRODUITS</a></li>
        <li><a href="bracelet.php" class="nav-link px-2 link-dark">BRACELETS</a></li>
        <li><a href="collier.php" class="nav-link px-2 link-dark">COLLIERS</a></li>
        <li><a href="bague.php" class="nav-link px-2 link-dark">BAGUES</a></li>
        <li><a href="panier.php" class="nav-link px-2 link-dark">PANIER</a></li>
        <div style="margin-left: 75px">
        
        <a href="deconnecter.php"><button type="button" class="btn btn-primary">DECONNEXION</button></a>
        </div>
      </ul>

  </div>
  
<?php } 
if (!estVisiteurConnecte() && !estAdminConnecte()){?>

   <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
   
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <a href="index.php"><img width="120" height="50" src="./images/logo.PNG" alt="logo" ></a>
        <li><a href="index.php" class="nav-link px-2 link-dark">ACCUEIL</a></li>
        <li><a href="produits.php" class="nav-link px-2 link-dark">NOS PRODUITS</a></li>
        <li><a href="bracelet.php" class="nav-link px-2 link-dark">BRACELETS</a></li>
        <li><a href="collier.php" class="nav-link px-2 link-dark">COLLIERS</a></li>
        <li><a href="bague.php" class="nav-link px-2 link-dark">BAGUES</a></li>
        <li><a href="panier.php" class="nav-link px-2 link-dark">PANIER</a></li>
        <div style="margin-left: 75px">
          <a href="connexion.php"><button  type="button" class="btn btn-outline-primary me-2">SE CONNECTER</button></a>
          <a href="inscrire.php"><button type="button" class="btn btn-primary">S'INSCRIRE</button></a>
        </div>
      </ul>

      
    </header>
  </div>
  <?php } ?>
</body>