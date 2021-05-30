<?php
$rate = '';
$points = 0;

for ($i = 0; $i < 3; $i++) {
    $points += $_POST['step' . $i];
}

for ($i = 0; $i < $points; $i++) {
    $rate .= '⭐️';
}

$i = $points === "-1" ? 0 : $points;

while ($i < 5) {
    $rate .= '⚫️';
    $i++;
}

echo " Vous avez accordé la note de : $rate";
