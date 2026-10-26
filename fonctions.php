<?php
function afficher(array $notes)
{
    foreach ($notes as $note) {
        echo $note . " | ";
    }
}

function moyenne(array $notes)
{
    echo (array_sum($notes)) / count($notes);

}

function getAdmis(array $notes, int $seuil)
{
    $admis = [];
    foreach ($notes as $nom => $note) {
        if ($note >= $seuil) {
            $admis[$nom] = $note;
        }
    }
    return $admis;
}
?>