<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animali</title>
</head>



<body>
<?php
    // ? Importiamo il file php contenente l'array degli animali 
    include __DIR__ . '/src/animals.php';


    // ? Creiamo quattro array separati, per suddivididere gli animali
    $mammiferi = [];
    $pesci = [];
    $rettili = [];
    $altri = [];  // ? nel caso manca qualche array di classe oppure non viene specificato...




    // # Iteriamo attraverso l'array degli animali e li inseriamo nelle array con classi, create prima
    foreach ($animals as $animal) {
        $classe = $animal['class'];
        if (array_key_exists($classe, $classi_animali)) {
            $classi_animali[$classe][] = $animal;
        } else {
            $classi_animali['Altri'][] = $animal;
        }
    }



    // # Stampiamo gli animali per ogni classe
    echo "<h2>Mammiferi</h2>";
    echo "<ul>";
    foreach ($classi_animali['Mammiferi'] as $animale) {
        echo "<li>{$animale['name']}, {$animale['species']}</li>";
    }
    echo "</ul>";



    echo "<h2>Pesci</h2>";
    echo "<ul>";
    foreach ($classi_animali['Pesci'] as $animale) {
        echo "<li>{$animale['name']}, {$animale['species']}</li>";
    }
    echo "</ul>";



    echo "<h2>Rettili</h2>";
    echo "<ul>";
    foreach ($classi_animali['Rettili'] as $animale) {
        echo "<li>{$animale['name']}, {$animale['species']}</li>";
    }
    echo "</ul>";



    echo "<h2>Altri Animali</h2>";
    echo "<ul>";
    foreach ($classi_animali['Altri'] as $animale) {
        echo "<li>{$animale['name']}, {$animale['species']}</li>";
    }
    echo "</ul>";

    // todo - questa parte potrebbe essere sostitutita da una funzione e poi con un ciclo essere chiamata per tutte le array e la loro lunghezza...
    ?>
</body>

</html>