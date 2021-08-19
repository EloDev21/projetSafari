<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $fichier = fopen('infos.txt','w+'); 
    // w+ pour write 

    $texte = "coucou new text";
    fwrite($fichier,$texte);
    echo fread($fichier, filesize('infos.txt'));

//     $fichier = fopen('infos.txt','r');
//    while(!feof($fichier)){
//     echo fgets($fichier, filesize('infos.txt'));
    
// }
?>
</body>
</html>