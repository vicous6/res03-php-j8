<?php 

$template = "login";

// connexion
if(isset($_POST['user']) && !empty($_POST['user'])&& isset($_POST['pass']) && !empty($_POST['pass'])){
    
    
        $userToCheck = loadUser($_POST['user']);
        $bddHash = $userToCheck -> getPassword();
        $loginHash = $_POST['pass'];
        
        
        
      $check = password_verify($loginHash,$bddHash);
        
        if ($check === true ){
            
            
        $_SESSION['status'] = true;
        $_SESSION['userId'] = $userToCheck->getId();
        $_GET['route'] = "mon-compte";
        var_dump($_SESSION);
        }

        
     
}
require "templates/layout.phtml"

?>