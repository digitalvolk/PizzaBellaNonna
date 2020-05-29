<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Pizzeria Bella Nonna</title>
    <meta name="author" content="Florian Volk">
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            min-width: 10em;
        }
    </style>

</head>

<body>

    <h1>Pizzeria Bella Nonna</h1>
    <p>Herzlich Willkommen auf der Bestellseite.</p>
    <p>Wir liefern sofort und kostenfrei. Überall.</p>

    <h2>Speisekarte</h2>

    <form action="" method="get">
        Suche:
        <input type="text" name="search">
        <input type="submit" value="OK">
    </form>

    <br><br>

    <table>
        <tr>
            <th>Produkt</th>
            <th>Zutaten</th>
            <th>Preis</th>
            <th></th>
        </tr>

<?php
    // DBMS information
    $dbHost = "daemon";
    $dbName = "bellanonna";
    $dbUser = "q2user";
    $dbPassword = "secretdb";

    // establish DB connection using PDO
    $pdo = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPassword);

    if (isset($_GET["search"])) {
        $preparedStatement = $pdo->prepare("SELECT * FROM pizzas WHERE name LIKE :search;");
        $preparedStatement->execute(array(":search" => "%" . $_GET["search"] . "%"));

        $result = $preparedStatement->fetchAll();
    } else {
        $sqlQuery = "SELECT * FROM pizzas;";
        $result = $pdo->query($sqlQuery);
    }

    if ($result) {
        // generate a table row for each pizza form the result set

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["ingredients"] . "</td>";
            echo "<td>" . number_format($row["cost"], 2, ",", ".") . " €</td>";
            echo "<td><a href=\"order.php?id=" . $row["id"] . "\">Bestellen</a></td>";
            echo "</tr>";
        }
    }
?>

<!--        <tr>
            <td>Salami</td>
            <td>Salami</td>
            <td>42,89 €</td>
            <td><a href="order.php?name=Salami&cost=42.89">Bestellen</a></td>
        </tr>-->
    </table>

</body>

</html>