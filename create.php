<?php
require_once("./vendor/autoload.php");

use App\Helpers\SQLiteDatabaseConnection;
?>


<html>

<head>
    <title>Genshin DB</title>
    <link rel="stylesheet" href="Style.css" />
</head>

<body>
    <div class="mainAllEditing">
        <button class="home">
            <a href="index.php" class="nav">HOME</a>
        </button>
        <form class="add" action="create_form.php" method="POST">
            <h1 class="addForm">Add New Character:</h1>
            <label for="name">Select Characters Name:
                <select type="text" name="name">
                    <option value="Venti">Venti</option>
                    <option value="Diluc">Diluc</option>
                    <option value="Klee">Klee</option>
                    <option value="Bennett">Bennett</option>
                    <option value="Mona">Mona</option>
                    <option value="Xiao">Xiao</option>
                    <option value="Xingqiu">Xingqiu</option>
                    <option value="Zhongli">Zhongli</option>
                    <option value="Ganyu">Ganyu</option>
                    <option value="Hu Tao">Hu Tao</option>
                    <option value="Jean">Jean</option>
                    <option value="Razor">Razor</option>
                    <option value="Noelle">Noelle</option>
                    <option value="Fischl">Fischl</option>
                    <option value="Sucrose">Sucrose</option>
                    <option value="Ningguang">Ningguang</option>
                    <option value="Qiqi">Qiqi</option>
                    <option value="Keqing">Keqing</option>
                    <option value="Diona">Diona</option>
                    <option value="Albedo">Albedo</option>
                    <option value="Rosaria">Rosaria</option>
                    <option value="Barbara">barbara</option>
                    <option value="Beidou">Beidou</option>
                    <option value="Xiangling">Xiangling</option>
                    <option value="Chongyun">Chongyun</option>
                    <option value="Xinyan">Xinyan</option>
                    <option value="Yanfei">Yanfei</option>
                    <option value="Amber">Amber</option>
                    <option value="Lisa">Lisa</option>
                    <option value="Keaya">Keaya</option>
                    <option value="Tartaglia">Tartaglia</option>
                    <option value="Traveler">Traveler</option>
                </select>
            </label>

            <label for="rare">Select Characters Rarity:
                <select type="int" name="rare">
                    <option value="4">4 Star</option>
                    <option value="5">5 Star</option>
                </select>
            </label>

            <label for="country">Select Characters Country:
                <select type="text" name="country">
                    <option value="Monstadt">Monstadt</option>
                    <option value="Liyue">Liyue</option>
                </select>
            </label>

            <label for="element">Select Characters Element:
                <select type="text" name="element">
                    <option value="Anemo">Anemo</option>
                    <option value="Cryo">Cryo</option>
                    <option value="Geo">Geo</option>
                    <option value="Hydro">Hydro</option>
                    <option value="Electro">Electro</option>
                    <option value="Pyro">Pyro</option>
                </select>
            </label>

            <label>
                Enter Characters Current Level: <input type="int" name="cLvl" />
            </label>


            <label>
                Enter Characters Equipped Weapon: <input type="text" name="weapon" />
            </label>


            <label for="wType">Select Weapon Type:
                <select type="text" name="wType">
                    <option value="Bow">Bow</option>
                    <option value="Catalyst">Catalyst</option>
                    <option value="Sword">Sword</option>
                    <option value="Polearm">Polearm</option>
                    <option value="Claymore">Claymore</option>
                </select>
            </label>

            <label for="wRare">Select Weapon Rarity:
                <select type="int" name="wRare">
                    <option value="1">1 Star</option>
                    <option value="2">2 Star</option>
                    <option value="3">3 Star</option>
                    <option value="4">4 Star</option>
                    <option value="5">5 Star</option>
                </select>
            </label>


            <label for="color1">Primary character color:
                <input type="color" name="color1" value="#ffffff">
            </label>

            <label>
                Secondary character color:
                <input type="color" name="color2" value="#c3c3c3">
            </label>
            <label class="iText">
                Charater intro text: <input type="text" name="intro" />
            </label>

            <?php $input = [$name,] ?>
            <button>Add Character</button>
        </form>

        <img src="Images\dblogo.png" class="logo" />
    </div>



</body>

</html>