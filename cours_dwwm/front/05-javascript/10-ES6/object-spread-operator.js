//pas de const si spread operator
let user = {
  nom: "toto",
  prenom: "tata",
  age: 10,
  taille: "petit",
};

// user.ville = "arras";
// user = { ...user, ville: "arras" };
const {age, taille, ...rest} = user // reste => { nom: 'toto', prenom: 'tata' }

console.log(age, taille, rest);
