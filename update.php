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
    <script src="advancedOptions.js" defer></script>
</head>

<body>
    <div class="mainAllEditing">
        <button class="home">
            <a href="index.php" class="nav">HOME</a>
        </button>
        <?php foreach ($Characters as $Character) { ?>
            <form class="update" action="update_form.php?ID=<?php echo $Character["ID"]; ?>" method="POST">
                <h1 class="upname">Update <?php echo $Character["CharName"]; ?>:</h1>


                <label>
                    Enter <?php echo $Character["CharName"]; ?>'s New Level: <input type="int" name="cLvl" value="<?php echo $Character["CurrentLvl"]; ?>" />
                </label>


                <label>
                    Enter <?php echo $Character["CharName"]; ?>'s New Equipped Weapon: <input type="text" name="weapon" />
                </label>


                <label for="wRare">Select New Weapon's Rarity:
                    <select type="int" name="wRare">
                        <option value="1" <?php if ($Character["WeaponRarity"] == 1) {
                                                echo "selected";
                                            } ?>>1 Star</option>
                        <option value="2" <?php if ($Character["WeaponRarity"] == 2) {
                                                echo "selected";
                                            } ?>>2 Star</option>
                        <option value="3" <?php if ($Character["WeaponRarity"] == 3) {
                                                echo "selected";
                                            } ?>>3 Star</option>
                        <option value="4" <?php if ($Character["WeaponRarity"] == 4) {
                                                echo "selected";
                                            } ?>>4 Star</option>
                        <option value="5" <?php if ($Character["WeaponRarity"] == 5) {
                                                echo "selected";
                                            } ?>>5 Star</option>
                    </select>
                </label>

                <h1 class="adv">Advanced Options</h1>


                <div class="advUp">


                    <label for="rare">Select <?php echo $Character["CharName"]; ?>'s Rarity:
                        <select type="int" name="rare">
                            <option value="4" <?php if ($Character["CharRarity"] == 4) {
                                                    echo "selected";
                                                } ?>>4 Star</option>
                            <option value="5" <?php if ($Character["CharRarity"] == 5) {
                                                    echo "selected";
                                                } ?>>5 Star</option>
                        </select>
                    </label>

                    <label for="country">Select <?php echo $Character["CharName"]; ?>'s Country:
                        <select type="text" name="country">
                            <option value="Monstadt" <?php if ($Character["CharContry"] == "Monstadt") {
                                                            echo "selected";
                                                        } ?>>Monstadt</option>
                            <option value="Liyue" <?php if ($Character["CharContry"] == "Liyue") {
                                                        echo "selected";
                                                    } ?>>Liyue</option>
                        </select>
                    </label>

                    <label for="element">Select <?php echo $Character["CharName"]; ?>'s Element:
                        <select type="text" name="element">
                            <option value="Anemo" <?php if ($Character["Element"] == "Anemo") {
                                                        echo "selected";
                                                    } ?>>Anemo</option>
                            <option value="Cryo" <?php if ($Character["Element"] == "Cryo") {
                                                        echo "selected";
                                                    } ?>>Cryo</option>
                            <option value="Geo" <?php if ($Character["Element"] == "Geo") {
                                                    echo "selected";
                                                } ?>>Geo</option>
                            <option value="Hydro" <?php if ($Character["Element"] == "Hydro") {
                                                        echo "selected";
                                                    } ?>>Hydro</option>
                            <option value="Electro" <?php if ($Character["Element"] == "Electro") {
                                                        echo "selected";
                                                    } ?>>Electro</option>
                            <option value="Pyro" <?php if ($Character["Element"] == "Pyro") {
                                                        echo "selected";
                                                    } ?>>Pyro</option>
                        </select>
                    </label>

                    <label for="wType">Select Weapon Type:
                        <select type="text" name="wType" value="<?php echo $Character["WeaponType"]; ?>">
                            <option value="Bow" <?php if ($Character["WeaponType"] == "Bow") {
                                                    echo "selected";
                                                } ?>>Bow</option>
                            <option value="Catalyst" <?php if ($Character["WeaponType"] == "Catalyst") {
                                                            echo "selected";
                                                        } ?>>Catalyst</option>
                            <option value="Sword" <?php if ($Character["WeaponType"] == "Sword") {
                                                        echo "selected";
                                                    } ?>>Sword</option>
                            <option value="Polearm" <?php if ($Character["WeaponType"] == "Polearm") {
                                                        echo "selected";
                                                    } ?>>Polearm</option>
                            <option value="Claymore" <?php if ($Character["WeaponType"] == "Claymore") {
                                                            echo "selected";
                                                        } ?>>Claymore</option>
                        </select>
                    </label>

                    <label>
                        Select <?php echo $Character["CharName"]; ?>'s Primary color: <input type="color" name="color1" value="<?php echo $Character["ForeColor"]; ?>" />
                    </label>
                    <label>
                        Select <?php echo $Character["CharName"]; ?>'s Secondary color: <input type="color" name="color2" value="<?php echo $Character["BackColor"]; ?>" />
                    </label>
                    <label class="iText">
                        Enter <?php echo $Character["CharName"]; ?>'s intro text: <input type="text" name="intro" value="<?php echo $Character["CharIntro"]; ?>" />
                    </label>


                </div>


                <?php $input = [$name,] ?>
                <button>Update Character</button>
            </form>
        <?php } ?>
        <img src="Images\dblogo.png" class="logo" />

    </div>




</body>

</html>