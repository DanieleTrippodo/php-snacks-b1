<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suddivisione Paragrafo</title>
</head>




<body>
<?php

   // # paragrafo lungo
   $paragrafo_lungo = "Questa è la prima frase. Questa è la seconda frase. Questa è la terza frase. Ecco un'altra frase. Un'ultima frase per completare.";

   // ? Suddividiamo il paragrafo in frasi utilizzando il punto come delimitatore
   $frasi = explode(". ", $paragrafo_lungo);

   // # Iteriamo attraverso le frasi per creare nuovi paragrafi
   echo "<h2>Paragrafi Separati:</h2>";
   foreach ($frasi as $frase) {
       // ? Aggiungiamo un punto alla fine di ogni frase se non è vuota
       if (!empty(trim($frase))) {
           echo "<p>" . trim($frase) . ".</p>";
       }
   }

?>
</body>

</html>