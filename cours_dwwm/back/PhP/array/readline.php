<?php

// $prenom= readline("veuillez saisir un prenom : "); // stop le process
// echo gettype($prenom);



#$nombre= intval(readline("veuillez saisir un prenom : ")); // stop le process
#$nombre= readline("veuillez saisir un prenom : ");
#$nombre= intval(readline("veuillez saisir un prenom : "));

#if(is_numeric($nombre)) echo 'ok';

#echo gettype($nombre);


// $mytab = [];
// $prenom= readline("veuillez saisir un prenom : ");
// $nom= readline("veuillez saisir un nom : ");
// $age= readline("veuillez saisir un age : ");
// $mytab [] = [$prenom, $nom, $age];
// $mytab = array();




// while(ta condition)
// {
// $tab[] = valeur;
// }

// print_r($mytab);


$mytab = [];

// while (true) {
//     $prenom = readline("Veuillez saisir un prénom : ");
//     $nom = readline("Veuillez saisir un nom : ");
//     $age = readline("Veuillez saisir un âge : ");
//     $mytab[] = [$prenom, $nom, $age];

//     $continue = readline("Voulez-vous ajouter une autre personne ? (oui/non) : ");
//     if (strtolower($continue) !== 'oui') {
//         break;
//     }
// }

// print_r($mytab);


while (true) {
    $prenom = readline("Veuillez saisir un prénom : ");
    $nom = readline("Veuillez saisir un nom : ");
    $age = readline("Veuillez saisir un âge : ");
    $newPerson = (object) ['prenom' => $prenom, 'nom' => $nom, 'age' => $age];
    $mytab[] = $newPerson;

    $continue = readline("Voulez-vous ajouter une autre personne ? (oui/non) : ");
    if (strtolower($continue) !== 'oui') {
        break;
    }
}

print_r($mytab);