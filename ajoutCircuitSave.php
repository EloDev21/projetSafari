<?php 

/// Etape 2  / Mise en place des requetes 

//verfication des champs de saisie s'ils sont settés et s'ils sont pas vides === htmlEntities

        if(isset($_POST['nom_circuit'])&& isset($_POST['prix'])&& isset($_POST['description'])&& isset($_POST['photo'])){

            if(!empty($_POST['nom_circuit'])&& !empty($_POST['prix'])&& !empty($_POST['description']) && !empty($_POST['photo'])){
                $nom_circuit = htmlentities($_POST["nom_circuit"]);
                $prix = htmlentities($_POST["prix"]);
                $description = htmlentities($_POST["description"]);
                $photo = htmlentities($_POST["photo"]);
            
              	if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) 
		{
			//Verification de la taille du fichier
			if($_FILES['photo']['size'] <= 10000000)
			{
				//Verification de l'extension
				$infofile = pathinfo($_FILES['photo']['nom_circuit']);
				$extension = $infofile['extension'];
				$extension_allowed = array('jpg', 'jpeg', 'png');

				if(in_array($extension, $extension_allowed)) 
				{
					$filename = $_FILES['photo']['tmp_name'];
					$circuits = 'upload/'.time().basename($_FILES['photo']['name']);

					move_uploaded_file($filename, $circuits);
				
				}
				else
				{
					die("L'extension n'est pas autorisée !");
				}

			}
			else
			{
				die("Erreur: le fichier uploadé est trop volumineux ! (> 1Mo)");
			}
		}
            
            
                      // Connexion à la base de données pour y enregistrer les données du formaulaire
try{
  $options =array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  $bdd = new PDO('mysql:host=localhost; dbname=projetphiliance;charset =utf8','root', '',$options);
}

catch(Exception $e){
  die($e->getMessage());
}

           // insertin dans la base de données des valeurs du formalaire
           $reqInsertion = $bdd->prepare('INSERT INTO circuits (nom_circuit,prix,description,photo) VALUES (:nom_circuit,:prix,:description,:photo) ');
           $reqInsertion->execute([
               'nom_circuit' =>$nom_circuit,
               'prix' =>$prix,
               'description' =>$description,
               'photo' =>$photo

           ]);
          }
        }
        header("location:circuits.php");
?>