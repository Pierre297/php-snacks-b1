<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 4</title>
</head>

<body>
    <!-- Creare un array con 15 numeri casuali,
     tenendo conto che l'array non dovrà contenere
      lo stesso numero più di una volta -->

    <?php

    // $randNumber = [];

    // while (count($randNumber) < 15) {
    //     $number = rand(1, 100);
    //     if (!in_array($number, $randNumber)) {
    //         $randNumber[] = $number;
    //         echo $randNumber;
    //     }
    // }

    $numbers = array();
    function rand_num_generator()
    {
        return rand(1, 1000);
    }
    for ($i = 0; $i < 15; $i++) {
        $number[$i] = rand_num_generator();
        echo $number[$i] . '<br>';
    }




    ?>




</body>

</html>