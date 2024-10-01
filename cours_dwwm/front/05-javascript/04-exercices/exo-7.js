// Créer un tableau d'utilisateurs vide
// y stocker 2 ou plus utilisateurs qui possèdent un "nom" et un "service" (ex: "informatique")
// creer une fonction qui permets de changer le service d'un utilisateur en y passant son nom, le nouveau service
// et le tableau d'origine
// cette fonction retourne un nouveau tableau à jour
// mettre à jour le tableau de base et l'afficher pour verfifier le changement
// destructuration et spread operator
//console.log du tableau d'origine modifié

let tabuser = [];

let personne = {
  nom: "toto",
  service: "banque",
};
let personne1 = {
  nom: "tata",
  service: "assurance",
};

tabuser = [...tabuser, personne, personne1];
console.log(tabuser);

function switchservice(nomrecherche, newservice, ...args) {
  let newtab = []
  for (let personne of args) {
    let { nom, service } = personne;
    if (nomrecherche == nom) {
      newtab = [...newtab, {nom:nomrecherche, service:newservice}]
      service = newservice;
      console.log(nom, service)
      console.log(newtab)

    }
    
  }
}
// console.log(tabuser)
// console.log(newtab)
switchservice("tata", "rh", ...tabuser);

























