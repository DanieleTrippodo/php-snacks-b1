<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter & Setter PHP</title>
</head>



<body>



<!-- Contenuto HTML -->






<!-- ------------------------------------------ Sezione PHP --------------------------------- -->
    <?php
        include_once 'Membership.php';
        include_once 'User.php';
        include_once  'PremiumUser.php';

        // Creazione di prova
        $membership = new Membership("Gold", 100);
        $premiumUser = new PremiumUser("Zeb89", "zeb@mhanz.com", $membership);

        echo "Name: " . $premiumUser->getName() . "<br>";
        echo "Email: " . $premiumUser->getEmail() . "<br>";
        echo "Membership Type: " . $premiumUser->getMembership()->getType() . "<br>";
        echo "Membership Cost: $" . $premiumUser->getMembership()->getCost() . "<br>";
    ?>

</body>
</html>