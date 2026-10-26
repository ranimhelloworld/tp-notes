<?php
require_once "config.php";
require_once "fonctions.php";
$notes = ["Sami"=>9, "Amel"=>17, "Ranim"=>19, "Tasnim"=>12 , "chaima"=>15];

echo "<h4>Les notes de la classe : </h4> <br>";
afficher($notes);

echo "<h4>La moyenne de la classe : </h4> <br>";
moyenne($notes);

echo "<h4>Les élèves admis : </h4> <br>";
print_r(getAdmis($notes, SEUIL_ADMIS));


?>