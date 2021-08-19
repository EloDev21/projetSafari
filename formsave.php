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

        if(isset($_POST['nom'])&& isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['message'])){

            if(!empty($_POST['nom'])&& !empty($_POST['email'])&& !empty($_POST['phone']) && !empty($_POST['message'])){
                $nom = htmlentities($_POST["nom"]);
                $email = htmlentities($_POST["email"]);
                $phone = htmlentities($_POST["phone"]);
                $message = htmlentities($_POST["message"]);
            }

           // insertin dans la base de données des valeurs du formalaire
           $reqInsertion = $bdd->prepare('INSERT INTO contactform (nom,email,phone,message) VALUES (:nom,:email,:phone,:message) ');
           $reqInsertion->execute([
               'nom' =>$nom,
               'email' =>$email,
               'phone' =>$phone,
               'message' =>$message,

           ]);

        }
        // header("location:accueil.php");
?>