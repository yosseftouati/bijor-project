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

if (isset($_POST['mail'])){
    $mail = $_POST['mail'];
    // echo $_POST['mail'];
  
    $mdp = $_POST['pwd'];
    // echo $_POST['pwd'];



    $rows = $conn->query("SELECT * FROM client WHERE mail='{$mail}' and pwd='{$mdp}'")->fetch();

    if($rows){
        $_SESSION['mail'] = $mail;
        header("Location: index.php");
    }
else{
 
    echo"<script>alert(\"Connexion échouée : le nom d'utilisateur ou le mot de passe est incorrect.\")</script>";
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
        <form action="connexion.php" method="POST">
        <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Adresse mail" name="mail" required/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Mot de passe" name="pwd" required/>
        
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Se souvenir de moi
              </label>
            </div>
            <a href="#!" class="text-body">Mot de passe oublié ?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
           <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Connexion</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Vous n'avez pas de compte ? Inscrivez-vous ! <a href="inscrire.php"
                class="link-danger">Inscription</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php');?>

