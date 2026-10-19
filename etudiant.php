<?php

$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];
$moy=0;

function moyenne(array $notes):float{
    return array_sum($notes) / count($notes);
}
print_r(moyenne($notes));

foreach ($notes as $nom_etu => $note) {
    echo "$nom_etu : $note<br>";
}

$filtrer = array_filter($notes, fn($note) => $note >= 10);
print_r($filtrer);

$sorting = sort($notes);
print_r($sorting);

$add = array_map(fn($note) => $note + 1, $notes);
print_r($add);
?>