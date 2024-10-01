const user = {
    nom : "test",
    prenom : "toto",
    age : 34 ,
    taille : "grand"
}

//destructuring
// const {nom, prenom, age, taille} = user;
const {nom, age} = user;

// affichage 
console.log(nom);
// console.log(prenom);
console.log(age);
// console.log(taille);
