<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Pizzeria Bella Nonna</title>
    <meta name="author" content="Florian Volk">
    <style>
    </style>

</head>

<body>

    <h1>Pizzeria Bella Nonna</h1>
    <p>Sobald Sie Ihre Pizza bezahlt haben, liefern wir.</p>

    <h2>Ihre Bestellung</h2>
<?php
    echo "Pizza: " . $_GET["name"];
    echo "<br>";
    echo "Preis: " . number_format($_GET["cost"], 2, ",", ".") . " €";
    echo "<br><br>";
    echo "<button>Kostenpflichtig bestellen</button>";
?>
    <br>
    <br>
    <a href="/">zurück zur Speisekarte</a>

</body>

</html>