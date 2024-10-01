// fetch Api

const user = {
  nom: "test",
  prenom: "toto",
  age: 34,
  taille: "grand",
};

//récupération des champs
const nom = "tata";
const age = 23;

// Renvoyer l'objet modifié

// const newUser = {
//   nom: nom,                    // ancienne methode!!!
//   prenom: "toto",
//   age: age,
//   taille: "grand",
// };

// const newUser = {
//   ...user,
//   nom: nom,                  // NOUVELLE METHODE !!!!!!!!!!!
//   age: age,
// nom,  // si le nom de la variable et l'attibut sont identique !
// age, // age : age
// };



console.log(newUser);
