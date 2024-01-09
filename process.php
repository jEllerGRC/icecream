<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice cream order summary</title>
</head>
    <body>
        <h1>Thank you for your order!</h1>

        <?php

        //Turn on error reporting
        ini_set("display_errors", 1);
        error_reporting(E_ALL);

        //define constants
        define("PRICE_PER_SCOOP", 2.50);
        define("SALES_TAX_RATE", 0.11);

            //echo raw variables from post array
            echo "<pre>";
            echo var_dump($_POST);
            echo "</pre>";

            $scoops = $_POST["scoops"];
            $flavors = $_POST["flavor"];
            $cone = $_POST["cone"];

            $flavorString = implode(", ", $flavors);

            //print a summary
            echo "<p> $scoops scoops </p>";
            echo "<p>Flavors: $flavorString </p>";
            echo "<p>$cone cone </p>";

            //calculate total due
            $subtotal = PRICE_PER_SCOOP * $scoops;
            $tax = $subtotal * SALES_TAX_RATE;
            $total = $subtotal + $tax;

            //Print totals
            echo "<p>Subtotal: {$subtotal}</p>";
            echo "<p>Tax: {$tax}</p>";
            echo "<p>Total: {$total}</p>";
        ?>

    </body>
</html>
