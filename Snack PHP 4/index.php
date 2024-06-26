<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array con numeri random</title>
</head>




<body>
<?php

    // ? Creazione di Array vuoto
    $numeri = [];




    // # Continuiamo a generare numeri casuali fino a quando l'array non contiene 15 numeri unici
    while (count($numeri) < 15) {
        $numero_casuale = rand(1, 100); // ? Genera un numero casuale tra 1 e 100

        // ? Aggiungi il numero all'array solo se non è già presente
        if (!in_array($numero_casuale, $numeri)) {
            $numeri[] = $numero_casuale;
        }
    }




    // # Stampiamo l'array di numeri casuali unici
    echo "<h2>Numeri Casuali Unici:</h2>";
    foreach ($numeri as $numero) {
        echo "<li>$numero</li>";
    }

?>
</body>

</html>