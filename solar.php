<?php
$WeatherSource = "https://api.forecast.io/forecast/39f27cf217d8025e5077b30751216243/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>