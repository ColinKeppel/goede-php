<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php

$tijdzone = ("Europe/Amsterdam");
date_default_timezone_set($tijdzone);

$tijd = date('H:i');
// ($tijd > 1 && $tijd < 10) || ($tijd > 20 && $tijd < 40)
if($tijd >  "06:00" && $tijd < "12:00") {
    echo '<p class="momentDag">Goedemorgen!</p>';
    echo '<p class="HetIsNu">Het is nu ' . $tijd . '</p>';
    echo '<body style="background-image: url(./backgrounds/morning.png)"';
}elseif ($tijd >  "12:00" && $tijd < "18:00") {
    echo '<p class="momentDag">>Goede middag!</p>';
    echo '<p class="HetIsNu">Het is nu ' . $tijd . '</p>';
    echo '<body style="background-image: url(./backgrounds/afternoon.png)"';
}elseif ($tijd >  "18:00" && $tijd < "00:00") {
    echo '<p class="momentDag">>Goede avond!</p>';
    echo '<p class="HetIsNu">Het is nu ' . $tijd . '</p>';
    echo '<body style="background-image: url(./backgrounds/evening.png)"';
}elseif ($tijd >  "00:00" && $tijd < "06:00") {
    echo '<p class="momentDag">>Goede nacht!</p>';
    echo '<p class="HetIsNu">Het is nu ' . $tijd . '</p>';
    echo '<body style="background-image: url(./backgrounds/night.png)"';
}


?>
	
</body>
</html>

