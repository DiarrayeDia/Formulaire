<?php
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
