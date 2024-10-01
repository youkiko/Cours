<?php

// echo date('d/m/y'); PHP_EOL; // => 25/09/24

// # strlen()
// $phrase = ' mettez la phrase que voul voul  ' ; //33
// echo strlen($phrase); PHP_EOL;

#substr()
// $paragraphe = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus numquam quaerat laborum, soluta, nulla cupiditate in minima dolorum corrupti ab amet a non modi perferendis odio suscipit provident quasi porro!";
// $excerpt = substr($paragraphe, 0, 20) . '...<a href="#">lire la suite.</a>';
// echo $excerpt;



# isset()

// $pseudo= 'toto';
// if ($pseudo) // erreur si $pseudo n'existe pas
// if (isset($pseudo)) { 
// 	echo 'la variable $pseudo existe';
// } else {
// 	echo 'la variable $pseudo n\'existe pas';
// }

$pseudo= '   '; // => '' si trim()
if (empty(trim($pseudo))) { 
	echo 'la variable $pseudo est vide';
} else {
	echo 'la variable $pseudo n\'est pas vide';
}




