<!-- Je vais verifier si l'id est bien  renseigné et qu'il existe de récuperer les informations bienspécifiques d'une offre (card). -->

<?php

if(isset($_GET['id']))
{
                  // Connexion à la base de données pour y enregistrer les données du formaulaire
          try{
           $options =array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                   $bdd = new PDO('mysql:host=localhost; dbname=projetphiliance;charset =utf8','root', '',$options);
             }
  
            catch (Exception $e) {
             die($e->getMessage());  
             }
        // ETAPE 2 : Faire la requête. preparée pour éviter les injections SQL vu qu'on a un parametre (l'id)
        $requete = $bdd->prepare("SELECT * FROM circuits WHERE id=:id");
        $requete->execute([
            'id' => $_GET['id']
        ]);
      
    
        $circuits = $requete->fetch();
  
    }
        else{
            echo("Id manquant. Nous n'irons pas loin ". "😢 ");
        }
        


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENE'SAFARI</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="circuits.css">
</head>
<body>
<?php 

        include('navbar.php');

?>
<div class="container " style="background-color:transparent;" >
  <div class="pricing1 py-5 ">
  <div class="container">
    
    </div>
    <!-- Row  -->
    <div class="row mt-2"  style="display:flex;justify-content:center;align-items:center;text-align:center;">
      <!-- Column -->
      <div class="col-lg-3 col-md-6 " >
    
      
        <!-- <a href="ajoutCircuit.php">  <button type="button" class="btn btn-info">Info</button></a> -->
        <div class="card text-center card-shadow on-hover border-0 mb-4" >
          <div class="card-body font-14">
          <!-- <span class="badge badge-inverse p-2 position-absolute price-badge font-weight-normal">Star du moment</span> -->

          <!-- au lie de mettre deu texte brut pour les titres on peut se contenter juste de faire appel grace au query string  -->
            <h5 class="mt-3 mb-1 font-weight-medium"><?php echo $circuits['nom_circuit'] ?></h5>
            <h6 class="subtitle font-weight-normal"><?php echo $circuits['description']; ?></h6>
            <div class="pricing my-3">
              <div class="imCard" >
                <img src="<?php echo $circuits['photo'] ?>" style="width: 17rem; height: 200px; object-fit: cover; ">
              </div>
              &nbsp;
              
              
              
              <span class="d-block">Forfait à la semaine <span class="font-weight-medium">5 nuitées
                </div>
                <span class="monthly display-5"> <?php echo $circuits['prix'].'€'; ?></span>
      
          <p>  <?php  echo $circuits['description']; ?></p>
           
            <div class="bottom-btn">
              <a class="btn btn-success-gradiant btn-md text-white btn-block" href="detail.php"><span>RESERVER</span></a>
            </div>
         
      
      
</div>
<!-- Column 1ere carte -->

        <div class="rowTexte" style ="display:flex;justify-content:flex-end;float:right;">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Rêvez grand!</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <a href="detail.php?id=<?php echo $circuits['infos_forfait']; ?>"></a>
 
  </div>
</div>
        </div>

    </div>
    


</body>
</html>
