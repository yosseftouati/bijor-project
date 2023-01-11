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

if (isset($_POST['valide'])){
    if(isset($_SESSION['cart'])){

    }
    else{
        $session_array = array(
            'id'=>$_GET['id'],
            'image'=>$_POST['image'],
            'titre'=>$_POST['titre'],
            'description'=>$_POST['description']

        );
        $_SESSION['cart'][] = $session_array;
    }

}
$produits = $conn->query("SELECT * FROM produits WHERE id =" . $_GET["id"])->fetch();
?>
    <img id="img_dtl" src="<?= $produits['image']?>" alt="">
    <div id="border_dtl">
   
        <h2 id="tit_dtl"><?= $produits['titre']?></h2>
        <br><br>
        <p id="des_dtl"><?= $produits['description']?></p><br>
        
        <?php 
        $quantite=$produits['quantite'];

        if($quantite>1){
            echo'<b><p style="color: green">En stock</p></b>';?><br>
            <form method="POST" action="">
                <label for="quantity">Quantité :</label>
                <input style="width: 50px" type="number" id="quantity" name="quantity" value="1" min="1" max="<?php echo $quantite; ?>">
                <!-- <button style="border-radius: 30px" type="button">OK</button><br><br> -->
                <?php 
                    if (isset($_POST['quantity'])){
                        $qtt = $_POST['quantity'];
                        $_SESSION['quantity']=$qtt;
                    
                        }
                    else{
                            $qtt=1;
                        }
  
                ?>
                <h4 id="prx_dtl"><?= $produits['prix']?>€</h4><br>
                
                
                <!-- Button trigger modal -->
                <!-- <form action="" method="POST"> -->
                <button type="submit" name="valide" id="bouton2" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Ajouter au panier</button>
                </form>
                
                <?php 
                if (isset($_POST['valide'])){
                    $sql = "INSERT INTO panier (id_produit,	quantite_selectionne) VALUES (".$_GET['id'].", $qtt)";
                    $stmt= $conn->prepare($sql);
                    $stmt->execute();
                    ?>
                    <SCRIPT LANGUAGE="JavaScript">
                    document.location.href="produits.php"
                    </SCRIPT> <?php
                        
                   ?>
                   
                   

            <?php
                }
                
                ?>
              
               
                
            <br>
            
            <?php } 












        elseif($quantite==0){
            echo'<b><p style="color: red">Article épuisé</p></b>';?><br>
            <h4 id="prx_dtl"><?= $produits['prix']?>€</h4><br>
         <?php }

        
        else{
            echo"<b><p style='color: orange'>Plus qu'un article disponible en stock</p></b>";?><br>
            <form method="POST" action="">
                <label for="quantity">Quantité :</label>
                <input style="width: 50px" type="number" id="quantity" name="quantity" value="1" min="1" max="<?php echo $quantite; ?>"><br><br>
                <?php 
                    if (isset($_POST['quantity'])){
                        $qtt = $_POST['quantity'];
                  
                    
                        }
                    else{
                            $qtt=1;
                        }
                     
                ?>
                <h4 id="prx_dtl"><?= $produits['prix']?>€</h4><br>
                <!-- Button trigger modal -->
                <button name="valide" type="button submit" id="bouton2" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Ajouter au panier</button>
                <?php  
                if (isset($_POST['valide'])){
                    $sql = "INSERT INTO panier (id_produit,	quantite_selectionne) VALUES (".$_GET['id'].", $qtt)";
                    $stmt= $conn->prepare($sql);
                    $stmt->execute();?>
                    <SCRIPT LANGUAGE="JavaScript">
                    document.location.href="produits.php"
                    </SCRIPT> 
            
                <?php
                }
                
                
           
        
         } ?>
        
   </div>  
     
  
 
    
