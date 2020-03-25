<?php
//on demarre une nouvelle session
session_start(); 
setcookie('pays', 'cameroun', time() +365*25*3600, null, null, FALSE, TRUE);
setcookie('pseudo', 'july', time() +365*25*3600, null, null, FALSE, TRUE);
$_SESSION['prenom'] = 'july';
$_SESSION['nom'] = 'flora';
$_SESSION['age'] = '21';
?>
<?php
//connection a la base de données
try{

    $bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
<?php
    //faire une selection avc la base de données
    $reponse=$bdd->query('SELECT * FROM jeux_video');
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil|Bienvenue sur mon Blog</title>
</head>
<body>
    salut je sais que tu t'apelles 
    <?php
    echo $_SESSION['prenom'];
    echo " et ton premon est ",$_SESSION['nom'] ;
    echo (" et tu as comme age s") ,$_SESSION['age'];
    ?>
    <p>  
    he je me souviens de toi tu t'apelles
    </p>
    
    <?php
    echo $_COOKIE['pseudo']," et tu viens du ",$_COOKIE['pays'];
    ?>
    
</body>
</html>