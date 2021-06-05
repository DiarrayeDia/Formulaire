<?php
function checkForm(array $post)
{
    $error = [];
    if ($post['lastname'] === "" || strlen($post['lastname'] < 2)) {
        $error['lastname'] = "Veuillez entrer un nom de famille valide (min 2 lettres) ";
    }

    if ($post['firstname'] === "" || strlen($post['firstname'] < 2)) {
        $error['firstname'] = "Veuillez entrer un prénom valide (min 2 lettres) ";
    }
    return $error;
}

function rating(string $points)
{
    $rate = '';
    for ($i = 1; $i < $points; $i++) {
        $rate .= '⭐️';
    }

    for ($i = $points + 1; $i < 5; $i++) {
        $rate .= '⚫️';
    }
    return $rate;
    echo " Vous avez accordé la note de : $rate";
}
