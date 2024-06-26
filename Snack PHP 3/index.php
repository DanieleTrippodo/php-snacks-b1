<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array di oggetti</title>
</head>




<body>
<?php

// # Array di oggetti (con Key le date) dei post
$PostPerData = [
    "01-01-2023" => [
        "Titolo" => "Questo è Post",
        "Autore" => "Michele Papagni",
        "Testo" => "Wow oggi è una bella giornata"
    ],


    "20-07-2001" => [
        "Titolo" => "Compleanno",
        "Autore" => "Daniele Trippodo",
        "Testo" => "Oggi è il mio compleanno!"
    ]
];




// # stampiamo per ogni elemento dell'array 
foreach ($PostPerData as $Data => $Posts) {
    echo "<h2>Data: $Data</h2>";

    foreach ($Posts as $Post) {
        echo "<li>$Post</li>";
    }
}
?>
</body>

</html>