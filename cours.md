open/read/close pour les fichiers

    ouvrir un fichier
    <?php
    $fichier = fopen('nomFichiet.txt', 'r')    // r pour read mais il affiche juste le flux
    mais ne l'affiche pas
    ?>

    fread() pour ouvrir le fichier et filesize pour lire le fichjier en entier
    fclose() pour fermer le fichier // Fermer pour ne plus utiliser le fichier derriere

EXEMPLE

<?php
    $fichier = fopen('infos.txt','r');
    echo fread($fichier, filesize('infos.txt'));
    fclose($fichier);
?>

    /// fgets() effectue la meme chose mais récupere ligne /ligne ou char/char

    pas besoin du filesize dans le fgets vu quil ne va recuperer quune seule ligne

    feof() // fendoffile pour use le fgets en mode boucle



    include et require permet de répéter une partie du code


    SUperGLoblales

    $files() : Infos fichier, taille,extension , et tout ce ui est upload
    $get() : permet de recup et stocker des donnees passées en parametre
    queryString : ? apres l'url

fORM

method : permet d'envoer des doN du form
action :page qui ecupera les doN du form
name = le nom de la page a recuper dans la page cble (page action )

enctype ="multipart/form-data // pour l'upload de fichiers

upload :<input ="file">

move_uploaded_file nous permettraa de recuperer le fichier uploadé

Connexion à la base de données ; Tjrs accompagnée d'un try catch (tjrs entourer le pdo avec )
try : connexion et catch :die

$bdd = new PDO('mysql:host=localhost;dbname=contactform;charset=utf-8 ', 'login', 'mdp'x)


JOINTURE 



select client.nom, prenom, adresse, cp 
FROM client
INNER JOIN adresse_client ON client.id = adresse_client.id