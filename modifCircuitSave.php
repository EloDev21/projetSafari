<?php 


//verfication des champs de saisie s'ils sont settés et s'ils sont pas vides === htmlEntities

        if(isset($_POST['nom_circuit'])&& isset($_POST['description'])&& isset($_POST['prix'])
					&& isset($_POST['id']) && isset($_POST['photo'])){

            if (!empty($_POST['nom_circuit'])&& !empty($_POST['description']) && !empty($_POST['id'])
			
					&& !empty($_POST['prix']) && !empty($_POST['photo'])){
                	$nom_circuit_circuit = htmlentities($_POST["nom_circuit_circuit"]);
               		 $description = htmlentities($_POST["description"]);
                	$prix = htmlentities($_POST["prix"]);
					$photo = htmlentities($_POST["photo"]);
					$id = htmlentities($_POST["id"]);
			
              
            }

        
		// ETAPE VERIFICATION UPLOAD DE FICHIER
		if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) 
		{
			//Verification de la taille du fichier
			if($_FILES['photo']['size'] <= 5000000)
			{
				//Verification de l'extension
				$infofile = pathinfo($_FILES['photo']['name']);
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
    die($e->getphoto);
}
/// Eta

           // modification dans la base de données des valeurs du circuit
           $reqUpdate = $bdd->prepare("UPDATE  circuits SET  nom_circuit = :nom_circuit, description =:description,prix = :prix WHERE id =:id ");
           $reqUpdate->execute([
               'nom_circuit'=>$nom_circuit,
               'description'=>$description,
               'prix'=>$prix,
               'photo'=>$photo,
               'id'=>$id

           ]);
		   
		   header("location:circuits.php");
        }
		else {
			die("Les chaamps doivent sont obligatoires dans.");
		}
?>