<?php
//session_start();
try{

    $bdd = new PDO ('mysql:host=localhost;dbname=test', 'root',''); 
}
catch(Exception $e)
{
    die('Erreur: ' . $e->getMessage());
}
?>
<?php
$reponse =  $bdd->query('SELECT nom FROM jeux_video LIMIT 0,10 ');
echo('voici les 10 premieres lignes de ma table:');

while($donnees = $reponse->fetch())
{
    echo $donnees['nom'].'<br/>';
}
$reponse->closeCursor();
?>