<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 2</title>
</head>

<body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
     che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
      "Accesso riuscito", altrimenti "Accesso negato".
 -->
    <div>

        <form name="form" action="index.php" method="get">
            <!-- email -->
            <label for="usermail"><strong>Email</strong></label><br>
            <input type="text" id="usermail" name="usermail"><br>
            <!-- nome -->
            <label for="username"><strong>Name</strong></label><br>
            <input type="text" id="username" name="username"><br>
            <!-- età -->
            <label for="userage"><strong>Age</strong></label><br>
            <input type="text" id="userage" name="userage">
            <br>
            <input type="submit" value="Submit">
        </form>

        <?php
        $usermail = $_GET['usermail'];
        $username = $_GET['username'];
        $userage = $_GET['userage'];


        ?>

        <!-- check dati utente -->
        <?php
        if (strpos($usermail, '@') !== false && strpos($usermail, '.') !== false && (strlen($username) > 3) && is_numeric($userage)) {
            echo 'Accesso riuscito';
        } elseif ($usermail == null && $username == null && $userage == null) {
            echo ' ';
        } else {
            echo 'Accesso negato';
        }


        ?>

    </div>

</body>

</html>