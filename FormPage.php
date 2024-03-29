<?php
$citta = array(
    "Trento" => "Nord",
    "Milano" => "Nord",
    "Torino" => "Nord",
    "Firenze" => "Centro",
    "Bologna" => "Centro",
    "Roma" => "Centro",
    "Napoli" => "Sud",
    "Bari" => "Sud",
    "Messina" => "Sud",
);
?>
<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <title>Meteo</title>
    <link href="CSS/CSS_FormPage.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="JS/JS_FormPage.js"></script>
</head>
<body>
<div>
    <h2>METEO</h2>
</div>
<div>
    <form method="post" action="RaccoltaPage.php">
        <label for="selmeteo" id="meteo">Città:</label>
        <select name="region" id="selmeteo">
            <?php
            foreach ($citta as $nome => $posizione) {
                echo "<option value = ".$nome.">".$nome."</option >";
            }
            ?>
        </select>
        <br>
        <label for="tMax" id="tempMax">Temp.Max:</label>
        <input type="number" name="tMax" id="tMax" min="-75" max="85">
        <br>
        <label for="tMin" id="tempMin">Temp.Min:</label>
        <input type="number" name="tMin" id="tMin" min="-75" max="85">
        <br>
        <input type="submit" value="Inserisci temperatura">
    </form>
</div>
<div id="orologio"></div>
</body>
</html>
