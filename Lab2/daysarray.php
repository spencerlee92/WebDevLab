<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="web Development :: Lab 2" />
        <meta name="keywords" content="web,development" />
        
    </head>
    <body>
	<?php
$days =array(
"Sunday",
"Monday",
"Tuesday",
"Wednesday",
"Thursday",
"Friday",
"Saturday"
);
echo "<p>The Days of the week in English are: </p>". implode(", ",$days);
/*
foreach($days as $day){
	echo $day . ", ";
}
	*/
$days =array(
"Dimanche",
"Lundi",
"Mardi",
"Mercredi",
"Jeudi",
"Vendredi",
"Samedi"
);
echo "<p>The Days of the week in French are: </p>". implode(", ",$days);
	?>
        
    </body>
</html>