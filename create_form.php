<?php
$pdo = new PDO("sqlite:Characters.db");
$name = $_POST["name"];
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

$statement = $pdo->prepare("INSERT INTO Characters(CharName, CharRarity, CharCountry, Element, EquippedWeapon, WeaponType, WeaponRarity, CurrentLvl, ForeColor, BackColor, CharIntro) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$statement->execute([$name, $rare, $country, $element, $weapon, $wType, $wRare, $cLvl, $color1, $color2, $intro]);

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
        <img class="paimon" src="images/add.png" />
    </div>
</body>

</html>