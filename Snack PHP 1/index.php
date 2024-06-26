<?php

// ? Numero Random
// $randomNumber = rand(0, 50);



        // Creiamo un array di partite
        $partite = [
            [
                "squadra_casa" => "Squadra A",
                "squadra_ospite" => "Squadra B",
                "punti_casa" => rand(0, 50),
                "punti_ospite" => rand(0, 50)
            ],

            [
                "squadra_casa" => "Squadra C",
                "squadra_ospite" => "Squadra D",
                "punti_casa" => rand(0, 50),
                "punti_ospite" => rand(0, 50)
            ]
        ];





        // Ciclo per mostrare ogni squadra a schermo
        foreach ($partite as $partita) {
            echo "Squadra di Casa: " . $partita["squadra_casa"] . "<br>";
            echo "Squadra Ospite: " . $partita["squadra_ospite"] . "<br>";
            echo "Punti Squadra di Casa: " . $partita["punti_casa"] . "<br>";
            echo "Punti Squadra Ospite: " . $partita["punti_ospite"] . "<br>";
        }
    ?>