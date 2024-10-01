<?php


echo meteo("hiver", 2);



// function meteo($saison,$temperature) 
// {	if ($temperature >= 2 || $temperature < -1)
// 		return "nous sommes en $saison et il fait $temperature degres";
// 	else 
// 		return "nous sommes en $saison et il fait $temperature degré";
// }

// function meteo($saison, $temperature)
// {

//     echo "Nous sommes en $saison et il fait $temperature " . ($temperature === 0 || $temperature === 1 || $temperature === -1 ? 'degré' : 'degrés');
// }; 

function meteo($saison, $temperature)
{
    $getPluriel = $temperature > 1 || $temperature < -1; 
    $avecOuSansS = $getPluriel ? 's' : '';
    return "Nous sommes en $saison et il fait $temperature degré$avecOuSansS";
}; 

