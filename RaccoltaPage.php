<?php
session_start();
$regione = $_POST["region"];
$tMax = $_POST["tMax"];
$tMin = $_POST["tMin"];
$giorno = date("d", time());
$mese = date("m", time());
$anno = date("Y", time());
$orario = date("H:i:s", time());

if (isset($_SESSION["meteo"])){
    $_SESSION["meteo"];
}
$array = array(
        "regione" => $regione,
    "tMax" => $tMax,
    "tMin" => $tMin,
    "giorno" => $giorno,
    "mese" => $mese,
    "anno" => $anno,
    "orario" => $orario
);
$_SESSION["meteo"][] = $array;
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Meteo</title>
    <link href="CSS/CSS_RaccoltaPage.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="JS/JS_RaccoltaPage.js"></script>
</head>
<body>
<div>
    <h2>METEO</h2>
</div>
<div>
    <table>
        <tr>
            <th>regione</th>
            <th>tMax</th>
            <th>tMin</th>
            <th>giorno</th>
            <th>mese</th>
            <th>anno</th>
            <th>orario</th>
        </tr>
    <?php
        foreach ($_SESSION["meteo"] as $item){
            echo "<tr>".
                "<td>". $item["regione"]. "</td>".
                "<td>". $item["tMax"]. "</td>".
                "<td>". $item["tMin"]. "</td>".
                "<td>". $item["giorno"]. "</td>".
                "<td>". $item["mese"]. "</td>".
                "<td>". $item["anno"]. "</td>".
                "<td>". $item["orario"]. "</td>".
                "</tr>"
            ;
        }
    ?>
    </table>
</div>
<div id="orologio" style="margin-top: 10px"></div>
</body>
</html>
