<?php
require_once("./vendor/autoload.php");

use App\Helpers\SQLiteDatabaseConnection;

$pdo = new PDO("sqlite:Characters.db");

$statement = $pdo->query("SELECT * FROM Characters");
$Characters = $statement->fetchAll();
$getRow = $_GET["ID"];
$statement = $pdo->prepare("SELECT * FROM Characters where ID=?");
$statement->execute([$_GET["ID"]]);
$Characters = $statement->fetchAll();

?>

<html>

<head>
    <title>Genshin DB</title>
    <link rel="stylesheet" href="Style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">
</head>

<body>


    <?php foreach ($Characters as $Character) { ?>
        <div class="cBack" style=" background-image: linear-gradient(to left, <?php echo $Character["ForeColor"]; ?>, <?php echo $Character["BackColor"]; ?>">



            <div class="headBox">
                <div class="cHead">
                    <h1 class="name"><?php echo $Character["CharName"]; ?></h1>
                    <?php if ($Character["CharRarity"] == 4) { ?>
                        <img class="star" src="Images\4star.png" />

                    <?php
                    } else if ($Character["CharRarity"] == 5) { ?>
                        <img class="star" src="Images\5star.png" />
                    <?php
                    }
                    ?>

                </div>
                <button class="home">
                    <a href="index.php" class="nav">HOME</a>
                </button>

            </div>
            <div class="info">
                <div class="stuffBox">
                    <img class="portrait" src="Images\Char\<?php echo $Character["CharName"]; ?>.png" />
                    <div class="introText">
                        <h1 class="charh1">About <?php echo $Character["CharName"]; ?>:</h1>
                        <p><?php echo $Character["CharIntro"]; ?></p>
                    </div>
                    <div class="introText">
                        <h2 class="charh2">Stats:</h2>
                        <p class="stat">Country:</br> <?php echo $Character["CharCountry"]; ?></p>
                        <p class="stat">Element:</br> <?php echo $Character["Element"]; ?></p>
                        <p class="stat">Current Level:</br> <?php echo $Character["CurrentLvl"]; ?></p>
                        <p class="stat">Current Weapon:</br> <?php echo $Character["EquippedWeapon"]; ?></p>
                        <p class="stat">Weapon Type:</br> <?php echo $Character["WeaponType"]; ?></p>
                        <p class="stat">Weapon Rarity:</br> <?php echo $Character["WeaponRarity"]; ?> Star</p>
                    </div>
                    <div class="buttonBox">
                        <div class="editButtons">
                            <button class="edit">
                                <a class="nav" href="update.php?ID=<?php echo $Character["ID"]; ?>">Update</a>
                            </button>
                            <button class="edit">
                                <a class="nav" href="delete.php?ID=<?php echo $Character["ID"]; ?>">Delete</a>
                            </button>
                            <img src="Images\dblogo.png" class="logoR" />
                        </div>

                    </div>
                </div>




            <?php } ?>
            </div>


        </div>



</body>

</html>