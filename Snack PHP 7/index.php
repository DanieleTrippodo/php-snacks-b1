<!DOCTYPE html>
<html>
<head>
    <title>Media Voti Alunni</title>
</head>
<body>

    <?php
    //? Importazione di un altro file PHP
    include __DIR__ . '/php/alunni.php';

    // # Funzione per calcolare la media dei voti
    function calcolaMedia($voti) {
        $somma = array_sum($voti);
        $numeroVoti = count($voti);
        return $somma / $numeroVoti;
    }

    // # prendi dall'array degli alunni e stampa Nome, Cognome e media dei voti
    foreach ($alunni as $alunno) {
        $nome = $alunno['name'];
        $cognome = $alunno['lastname'];
        $mediaVoti = calcolaMedia($alunno['voti']);
        
        echo "<p>Nome: $nome</p>";
        echo "<p>Cognome: $cognome</p>";
        echo "<p>Media dei voti: " . number_format($mediaVoti, 2) . "</p>";
        echo "<hr>";
    }
    ?>
</body>
</html>
