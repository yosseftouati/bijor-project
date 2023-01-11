<?php include('navbar.php');

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

if(isset($_POST['submit'])){
    $mail=$_POST['mail'];
    $mdp=$_POST['pwd'];
    $pwd2=$_POST['pwd2'];

   
    if($mail && $mdp && $pwd2){
        if($mdp==$pwd2){

            $sql = "INSERT INTO client (mail, pwd) VALUES (?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$mail, $mdp]);
            header('Location:index.php');

        }
        else{
            echo"<script>alert(\"Les mots de passe saisis sont différents\")</script>";
        }

    }
    else{
        echo("Veuillez saisir tous les champs");
    }
}
?>



<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="inscrire.php" method="POST">
        <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Adresse mail" name="mail" required/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Mot de passe" name="pwd" required /> <br>
              
          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Confirmez votre mot de passe" name="pwd2" required />
        
          </div>
          <button type="submit" class="btn btn-primary btn-lg" name="submit"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Inscription</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Déjà client ? Connectez-vous ! <a href="connexion.php"
                class="link-danger">Connexion</a></p>
        </form>
      </div>
    </div>
  </div>
  <?php include('footer.php')?>
</section>
