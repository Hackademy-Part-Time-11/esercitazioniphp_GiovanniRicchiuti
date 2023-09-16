<?php

$persone = [
    ["nome" => "Giovanni", "cognome" => "Ricchiuti", "genere" => "M"],
    ["nome" => "Anna", "cognome" => "Verdi", "genere" => "Femmina"],
    ["nome" => "Luigi", "cognome" => "Bianchi", "genere" => "Altro"],
];

foreach ($persone as $persona) {
    $saluto = 'Buongiorno';

    if ($persona['genere'] == 'M') {
        $saluto = $saluto . " ". 'Sig. ';
    } elseif ($persona['genere'] == 'Femmina') {
        $saluto = $saluto . " ". 'Sig.ra ';
    } else {
        $saluto = $saluto. " ";
    }

    $saluto .= $persona['nome'] . ' ' . $persona['cognome'];

    echo $saluto . "\n";
}

$arrayNumeri = [2, 4, 8, 20, 40, 50, 79];
$arrayNumeriPari = 0;
$arrayLunghezza = 0;

foreach($arrayNumeri as $pari) {
    if (($pari % 2) == 0) {
        $arrayNumeriPari += $pari;
        $arrayLunghezza++;
    }
}

echo $arrayNumeriPari / $arrayLunghezza;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY ";
    } elseif ($i % 3 == 0) {
        echo "PHP ";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT ";
    } else {
        echo $i . " " ;
    }
}

$temperature = [
    "Venezia" => 16,
    "Bari" => 32,
    "Roma" => 28,
    "Napoli" => 30,
    "Milano" => 13,
    "Palermo" => 14,
    "Torino" => 24,
    "Lecce" => 27,
    "Genova" => 30,
    "Catania" => 11,
    "Cosenza" => 9,
];

foreach ($temperature as $città => $gradi) {
    $condizione = " ";

    if ($gradi > 25) {
        $condizione = "Fa molto caldo";
    } elseif ($gradi >= 15) {
        $condizione = "Fa caldo";
    } elseif ($gradi < 15) {
        $condizione = "Fa freddo";
    }

    echo "A $città fa $condizione con $gradi";
}
