<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 1</title>
</head>

<body>
    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <p>
        <?php

        // array calendario partite
        $basketPlay = [
            [
                "squadraCasa" => "Brooklyn Nets",
                "squadraOspite" => "Chicago Bulls",
                "citta" => "Brooklyn",
                "punteggioPrimo" => "44",
                "punteggioSecondo" => "50"
            ],
            [
                "squadraCasa" => "Chicago Bulls",
                "squadraOspite" => "Cleveland Cavaliers",
                "citta" => "Chicago",
                "punteggioPrimo" => "60",
                "punteggioSecondo" => "55"
            ],
            [
                "squadraCasa" => "Cleveland Cavaliers",
                "squadraOspite" => "Milwaukee Bucks",
                "citta" => "Cleveland",
                "punteggioPrimo" => "49",
                "punteggioSecondo" => "60"
            ],
            [
                "squadraCasa" => "Milwaukee Bucks",
                "squadraOspite" => "Miami Heat",
                "citta" => "Milwaukee",
                "punteggioPrimo" => "80",
                "punteggioSecondo" => "45"
            ],
            [
                "squadraCasa" => "Miami Heat",
                "squadraOspite" => "Washington Wizards",
                "citta" => "Miami",
                "punteggioPrimo" => "39",
                "punteggioSecondo" => "66"
            ],
        ];

        foreach ($basketPlay as $x => $val) {
            echo "$val[squadraCasa] " . "$val[citta] " . "$val[squadraOspite] " . " | " . "$val[punteggioPrimo] - " . "$val[punteggioSecondo]<br>";
        }

        ?>
    </p>

</body>

</html>