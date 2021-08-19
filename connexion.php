
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>SENE'Safari</title>
   <!--Made with love by Mutiullah Samim -->
   
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
<!--     Fontawesome CDN
 -->   

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="connexion.css"> 
</head>
<body>
    <?php 
        include'navbar.php';
    ?>
<div class="container-fluid" >
    <div class="d-flex justify-content-center h-100">
        <div class="card" style ="margin-top:55px;margin-left:65%;">
            <div class="card-header">
                <h3> Se connecter &nbsp;
                     <span ><i class="fa fa-user" style="font-size:xxx-large;float : right;position:absolute;right:-13px;top:-29px"></i>
                    </span>
                </h3>
               
                <div class="d-flex justify-content-end social_icon">
                    
                </div>
            </div>
                 <h5 class="text-center" style="margin: 30px; text-decoration:underline">Connexion à son espace personnel </h5>

            <div class="card-body">

                <form>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-plus"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Veuillez saisir votre pseudo" name="pseudo" required>
                        
                    </div>
                    &nbsp;
                       <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope" id="letter"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Veuillez saisir votre email" name="pseudo" required>
                        
                    </div>
                    &nbsp;
                       <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Veuillez saisir votre mot de passe" name="pseudo" required>
                        
                    </div>
                    
               
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-success text-center login_btn" value="Connexion">
                    </div>

                </form>
                  <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <a href="inscription.php">S'inscrire</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Mot de passe oublié ?</a>
                </div>
            </div>
            </div>
        
        </div>
    </div>
</div>
</body>

</html>