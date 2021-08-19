
<?php 
        include 'navbar.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>SENE'Safari</title>
</head>
<body>

    <div class="container-fluid" style ="border-radius: 10px;width: 550px;display :flex; flex-direction:column; text-align:center;align-items:center;margin-top:55px;margin-left:32%">
    
   
    <!-- Creation du form avec la methode post pour envoyer les donnees à notre BDD grace à formsave -->
    <!-- name pour recuperer le post -->
<h2 style="color:#bc6c25; text-transform:uppercase">Formulaire d'ajout d'un circuit</h2>

    <form method="POST" action="ajoutCircuitSave.php"  >
    
         <div class="mb-3">Nom du circuit <span class="star">*</span> </label>
            <input type="text" class="form-control" name ="nom_circuit" aria-describedby="nameHelp" required placeholder ="Veuillez entrer votre nom et prénom">
         </div>
         <div class="mb-3">
             <label class="form-label">Prix du circuit<span class="star"> *</span></label>
             <input type="text" name="prix" class="form-control" aria-describedby="emailHelp" required placeholder ="Veuillez entrer le prix du circuit">
             
            </div>
            
            <div class="mb-3">
                <label class="form-label">Description du circuit<span class="star" > *</span></label>
                <textarea name="description" id="" cols="80" rows="10"></textarea>
                <div class="mb-3">
                               <label for="photo" class="form-label">Photo</label>
                               <input type="file" class="form-control" id="photo" name="photo">
                           </div>
      
        </div>
        
 
        <div class="form-text" style="color:yellow;">Tous les champs comportant un astérix (*) sont obligatoires.</div>
         <button type="submit" class="btn btn-success" style="color:wheat;font-weight:bold;text-align:center; background-color:black;margin-right:40px">AJOUTER</button>
    </form>
    </div>
    
</body>
</html>