<?php
include('navbar.php');?>
   
   <div class="container">
        <div class="gauche">
             <h3  class="titrerecap">Mes infos</h3><br><br>

                <?php
                function getIp(){
                if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }else{
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                return $ip;
                }?>
                
               <b>Nom :</b>  <?= $_POST['nom'];?><br><br>
               <b> Prénom :</b> <?=  $_POST['prenom'];?><br><br>
               <b> Mail : </b> <?php echo $_SESSION['mail'];?><br><br>
               <b>Numéro de téléphone :</b>  <?=  $_POST['tel'];?><br><br>
               <b>Adresse de livraison :</b>  <?=  $_POST['adresse'];?>, <?=  $_POST['cp'];?> <?=  $_POST['ville'];?>, <?=  $_POST['pays'] ;?> <br><br>
              <?php echo '<b>Adresse IP :</b>  '.getIp();?><br><br>


          <?php    // Simple browser and OS detection script. This will not work if User Agent is false.
            $agent = $_SERVER['HTTP_USER_AGENT'];

            // Detect Device/Operating System
            if(preg_match('/Linux/i',$agent)) $os = 'Linux';
            elseif(preg_match('/Mac/i',$agent)) $os = 'Mac'; 
            elseif(preg_match('/iPhone/i',$agent)) $os = 'iPhone'; 
            elseif(preg_match('/iPad/i',$agent)) $os = 'iPad'; 
            elseif(preg_match('/Droid/i',$agent)) $os = 'Droid'; 
            elseif(preg_match('/Unix/i',$agent)) $os = 'Unix'; 
            elseif(preg_match('/Windows/i',$agent)) $os = 'Windows';
            else $os = 'Inconnu';?>
            <b>Système d'expoitation : </b><?php echo $os;?><br><br>

            <?php // Browser Detection
            if(preg_match('/Firefox/i',$agent)) $br = 'Firefox'; 
            elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
            elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome'; 
            elseif(preg_match('/Opera/i',$agent)) $br = 'Opera'; 
            elseif(preg_match('/MSIE/i',$agent)) $br = 'IE'; 
            else $bs = 'Inconnu';?>
            <b>Navigateur : </b><?php echo $br;?>
            
        </div>
        <div class="droite">
        <h3 class="titrerecap">Ma commande</h3><br><br>
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
        
        $requete = $conn->query("SELECT * FROM panier,produits WHERE produits.id=panier.id_produit")->fetchAll();
        
        foreach($requete as $r)
        {
            echo
            '<div class="contain">
                <img class="imgRecap" src='.$r['image'].' alt="">
                <div><span class="titleRecap">'.$r['titre'].'</span></div>
                <br>
                <p class="prixRecap">Prix : '.$r['prix'].'€</p>
                <p class="qttRecap">Quantité : '.$r['quantite_selectionne'].'</p>
                
                
                
            </div>
            <br>';
        }


        echo '<h5><b>Total de votre commande : </b>'; echo $_SESSION['total']; echo'€</h5>' ;
        ?>
<form action="recapinfo.php" method="post">
        <br><input name="recap" type="submit" id="bouton4" value=" Valider ma commande ">
</form>    
    </div>
   </div>

   <?php

   if(isset($_POST['recap']))
   {
    $sql = "TRUNCATE table panier";
    $stmt= $conn->prepare($sql);
    $stmt->execute();?>
    <script LANGUAGE="JavaScript">
    document.location.href="reception.php"
</script>
   <?php } ?>
   


   
   