<?php


function initSession() {
    session_start();
}

function estVisiteurConnecte() 
{
    $connecte = false;
    if (isset($_SESSION["mail"]))
    {
      if($_SESSION['mail'] !='root@root.com') {
         $connecte = true; 
      }
    }
    
    return $connecte;
}

function estAdminConnecte() 
{
    $connecte = false;
    if (isset($_SESSION["mail"]))
    {
       if($_SESSION['mail']=='root@root.com'){
        $connecte = true; 

       }
        
    }
    
    return $connecte;
}
function deconnecter() {
   
    // unset($_SESSION["mail"]);
    // unset($_SESSION["mdp"]);
    session_destroy();
    header("location:index.php");
}

