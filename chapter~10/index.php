


<?php  
 
  require "datbase.php";
  require "user.php";
 

//   import calss in file database
$database = new Database();
$db = $database->getConnection();

// Créer un utilisateur
$user = new User($db);
$user->name= "mohammed";
$user->email = "mohammed@test.com";
$user->create();

// Lire les utilisateurs
$liste = $user->read();
foreach ($liste as $u) {
    echo $u['nom'] . " - " . $u['email'] . "<br>";
}



?>