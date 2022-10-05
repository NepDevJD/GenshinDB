<?php
$pdo = new PDO("sqlite:Characters.db");
$statement = $pdo->query("SELECT * FROM Characters");
$Characters = $statement->fetchAll();
$getRow = $_GET["ID"];
$statement = $pdo->prepare("SELECT * FROM Characters where ID=?");
$statement->execute([$_GET["ID"]]);
$Characters = $statement->fetchAll();

$rare = $_POST["rare"];
$country = $_POST["country"];
$element = $_POST["element"];
$weapon = $_POST["weapon"];
$wType = $_POST["wType"];
$wRare = $_POST["wRare"];
$cLvl = $_POST["cLvl"];
$color1 = $_POST["color1"];
$color2 = $_POST["color2"];
$intro = $_POST["intro"];

$statement = $pdo->prepare("UPDATE Characters SET CharRarity=?, CharCountry=?, Element=?, EquippedWeapon=?, WeaponType=?, WeaponRarity=?, CurrentLvl=?, ForeColor=?, BackColor=?, CharIntro=? WHERE ID=?");
$statement->execute([$rare, $country, $element, $weapon, $wType, $wRare, $cLvl, $color1, $color2, $intro, $_GET["ID"]]);
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
        <img class="paimon" src="images/update.png" />
    </div>
</body>

</html>