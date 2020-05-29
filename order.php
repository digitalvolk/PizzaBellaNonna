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
    // DBMS information
    $dbHost = "daemon";
    $dbName = "bellanonna";
    $dbUser = "q2user";
    $dbPassword = "secretdb";

    // establish DB connection using PDO
    $pdo = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPassword);

    $sqlQuery = "SELECT name, cost FROM pizzas WHERE id = " . $_GET["id"] . ";";
    $result = $pdo->query($sqlQuery);

    if ($result) {
        $row = $result->fetch();
        echo "Name: " . $row["name"];
        echo "<br>";
        echo "Preis: " . number_format($row["cost"], 2, ",", ".") . " €";
    }


    echo "<br><br>";
    echo "<button>Kostenpflichtig bestellen</button>";
?>
    <br>
    <br>
    <a href="/">zurück zur Speisekarte</a>

</body>

</html>