<?php

$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];

foreach ($notes as $nom_etu => $note) {
    echo "$nom_etu : $note<br>";
}

function moyenne(array $notes):float{
    return array_sum($notes) / count($notes);
}
print_r(moyenne($notes));

function admis(array $notes):array{
    return array_filter($notes, fn($note) => $note >= 10);
}
print_r(admis($notes));

function sorting(array $notes):array{
    sort($notes);
    return $notes;
}

print_r(sorting($notes));

function plus(array $notes):array{
    return array_map(fn($note) => $note + 1, $notes);
}

print_r(plus($notes));

?>