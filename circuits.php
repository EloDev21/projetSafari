<?php 
              // Connexion à la base de données pour y enregistrer les données du formaulaire
try{
  $options =array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  $bdd = new PDO('mysql:host=localhost; dbname=projetphiliance;charset =utf8','root', '',$options);
}

catch(Exception $e){
  die($e->getMessage);
  // requete poour l'affichage les circuits de toute la table 
}
$requete = $bdd->query(' SELECT * FROM circuits')  ;


//on utiliserait un fetch mais mieux vaut utiliser le fetch sur une card vu qu'elle se répete tout le temps

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h3 class="font-weight-medium">Nous vous proposons un large choix de circuits aussi tentants les uns que les autres</h3>
        <h6 class="subtitle">L'abus de plaisir est essentiel pour la santé. A renouveler sans modération</h6>
      </div>
    </div>
    <!-- Row  -->

    <div class="row mt-5" style="display:flex;justify-content:center;align-items:center;text-align:center;">
      <!-- Column -->

      <!-- boucle php pour fetch les destinations (autant qu'il y'en aura)vu que c'est la card qui se repete differement 
      . Le while se termine à la fin de la columnCard-->
      <div class="bouton">

    

      <button type="button" class="btn btn-success" style="margin:20px;">
      <a href="ajoutCircuit.php">
      aJOUTER destination
      </a>
    </button>&nbsp;&nbsp;
    </div> 
     <?php 
     
          while($circuits=$requete->fetch()){

          
     ?>
     
     <div class="col-lg-3 col-md-6">
        <form action="POST" action="ajoutCircuitSave.php" enctype=multipart/form-data>
        
        <div class="card text-center card-shadow on-hover border-0 mb-4">
          <div class="card-body font-14">
     


      <!-- echo pour récuperer le nom du circuits depuis la base de données 
      query string sur le href pour recuperer les infos grace à l'id en cliquant sur le 
      nom au lieu de renvoyer directement vers detail.phph -->
      <a href="detail.php?id="<?php echo $circuits['id']; ?>">  

            <h5 class="mt-3 mb-1 font-weight-medium"><a href="detail.php?id=<?php echo $circuits['id']; ?>" ><?php echo ($circuits['nom_circuit']); ?></a></h5>
            <h6 class="subtitle font-weight-normal"> <?php echo($circuits['description']); ?></h6>
            <div class="pricing my-3">
              <div class="imCard" >
                
                <img src="<?php echo $circuits['photo'] ?>"  style="width: 17rem; height: 200px; object-fit: cover; ">
              </div>
              
              
              <h6 class="subtitle font-weight-normal"><?php echo $circuits['description']; ?></h6>
              <h6 class="subtitle font-weight-normal"><?php echo $circuits['infos_forfait']; ?></h6>
            </div>
            
            <span class="monthly display-5"><h4><?php echo($circuits['prix']).'€'; ?></span></h4>
            <div class="bottom-btn">
              <a class="btn btn-success-gradiant btn-md text-white btn-block" href="detail.php?id=<?php  echo $circuits['id'] ;?>  <?php echo $circuits['id']; ?>" ><span>RESERVER</span></a>
            </div>
             
      <button type="button" class="btn btn-warning text-danger" style="margin:20px;">
      <a href="modifCircuit.php?id=<?php echo $circuits['id'] ?>;">
      MODIFIER destination
      </a>
    </button>&nbsp;&nbsp;
             <!-- onclick avant le href pour afficher le popup de suppression oui il execute le href annuler il sarrete sans executer le href -->
      <button type="button" class="btn btn-danger" style="margin:20px;">
      <a  onclick="return confirm('Etes vous sûr de vouloir supprimer cette destination')" href="delCircuit.php?id=<?php echo $circuits['id']; ?>">
      SUPPRIMER destination
      </a>
    </button>&nbsp;&nbsp;
          </div>
          <!-- Column 1ere carte -->
        </div>
      </form> 
      </div>
      <?php }  ?>
    

</body>
</html>
