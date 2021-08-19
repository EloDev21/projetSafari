<?php

	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$id = htmlentities($_GET['id']);

        // ETAPE 1 : Connexion à la BDD
        try {
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $bdd = new PDO('mysql:host=localhost;dbname=projetphiliance;charset=utf8', 'root', '', $options);

            //print_r($bdd);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

        // ETAPE 2 : Faire la requête.
        $requete = $bdd->prepare("DELETE FROM circuits WHERE id=:id");
        $requete->execute([
            'id' => $id
        ]);
		
      echo "Suppression effectuée !";
        header("location:circuits.php?feedback=deleted");

	}
	else
	{
		die("Erreur de suppression: Id inconnu");
	}