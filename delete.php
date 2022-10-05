<?php
require_once("./vendor/autoload.php");

use App\Helpers\SQLiteDatabaseConnection;

$pdo = new PDO("sqlite:Characters.db");

if (!empty($_GET["ID"])) {
    $ID = $_GET["ID"];
    $statement = $pdo->prepare("DELETE FROM Characters WHERE ID=?");
    $statement->execute([$ID]);
    $deleteCount = $statement->rowCount();
}
?>

<html>

<head>
    <title>Genshin DB</title>
    <link rel="stylesheet" href="Style.css" />
</head>

<body>
    <div class="mainAllEdit">
        <button class="rHome">
            <a href="index.php" class="nav">Return Home</a>
        </button>
        <img class="paimon" src="images/delete.png" />
    </div>
</body>

</html>