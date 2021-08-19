<?php 
        // Connexion à la base de données pour y enregistrer les données du formaulaire
try{
    $options =array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bdd = new PDO('mysql:host=localhost; dbname=projetphiliance;charset =utf8','root', '',$options);
}

catch(Exception $e){
    die($e->getMessage);
}

/// Etape 2  / Mise en place des requetes 

//verfication des champs de saisie s'ils sont settés et s'ils sont pas vides === htmlEntities

if(isset($_POST['pseudo'])&& isset($_POST['email'])&& isset($_POST['passw'])){

    if(!empty($_POST['pseudo'])&& !empty($_POST['email'])&& !empty($_POST['passw'])){
        $pseudo = htmlentities($_POST["pseudo"]);
        $email = htmlentities($_POST["email"]);
        $passw = htmlentities($_POST["passw"]);
    }

   // insertin dans la base de données des valeurs du formalaire
   $reqInsertion = $bdd->prepare('INSERT INTO signup (pseudo,email,passw) VALUES (:pseudo,:email,:passw) ');
   $reqInsertion->execute([
       'pseudo' =>$pseudo,
       'email' =>$email,
       'passw' =>$passw,
       

   ]);

}
header("location:accueil.php");
?>