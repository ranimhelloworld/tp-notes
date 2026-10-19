<?php

$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];
$moy=0;

foreach ($notes as $nom_etu => $note) {
    echo "$nom_etu : $note<br>";
}
$somme = array_sum($notes)/5;
print_r($somme);

$filtrer = array_filter($notes, fn($note) => $note >= 10);
print_r($filtrer);

$sorting = sort($notes);
print_r($sorting);

$add = array_map(fn($note) => $note + 1, $notes);
print_r($add);
?>