<?php
$pdo = new PDO("sqlite:Characters.db");
$statement = $pdo->query("SELECT * FROM Characters");
$Characters = $statement->fetchAll();
?>
<html>

<head>
    <title>Genshin DB</title>
    <link rel="stylesheet" href="Style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">
</head>

<body>

    <div class="mainAll">
        <div class="mainBack">

            <h1 class="mainHead">my characters:</h1>
            <div class="mainBox">

                <?php foreach ($Characters as $Character) { ?>

                    <a href="read.php?ID=<?php echo $Character["ID"]; ?>">
                        <div class="charList" style=" background-image: linear-gradient(to left, <?php echo $Character["ForeColor"]; ?>, <?php echo $Character["BackColor"]; ?>">
                            <div class="icostar">
                                <img class="cIcon" src="Images\CharIcon\<?php echo $Character["CharName"]; ?>-icon.png" />
                                <?php if ($Character["CharRarity"] == 4) { ?>
                                    <img class="stars" src="Images\4star.png" />

                                <?php
                                } else if ($Character["CharRarity"] == 5) { ?>
                                    <img class="stars" src="Images\5star.png" />
                                <?php
                                }
                                ?>
                            </div>
                            <div class="nameBox">
                                <h2 class="nameText"><?php echo $Character["CharName"]; ?></h2>

                            </div>
                        </div>
                    </a>


                <?php } ?>
                <a href="create.php">
                    <div class="newList">
                        <h3 class="newText">Add New</h3>
                        <h4 class="newText">Character</h4>
                    </div>
                </a>
            </div>



        </div>
        <img src="Images\dblogo.png" class="logo" />
    </div>




</body>

</html>