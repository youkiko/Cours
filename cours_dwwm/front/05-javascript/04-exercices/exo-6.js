//créer quelque object "voiture" (min3) => 2 attributs : marque et puissance

// mettres ces objects dans un tableau

// créer une fonction qui prend en paramètre le tableau et une marque recherchée
//=> nous renvoies le nombre de voiture trouvées

// obligation d'utiliser uniquement la destructuration et le spread opérator

//  rechercheParMarque("renault", )
let tab = [];
let voiture = {
  marque: "honda",
  puissance: 210,
};
let voiture2 = {
  marque: "fiat",
  puissance: 90,
};
let voiture3 = {
  marque: "ford",
  puissance: 180,
};
let voiture4 = {
  marque: "ford",
  puissance: 110,
};

tab = [...tab, voiture, voiture2, voiture3, voiture4];
console.log(tab);

function rechercheParMarque(marquerecherchee, ...args) {
    let cpt = 0;
  for (const voiture of args) {
    const { marque } = voiture;
    if (marquerecherchee == marque) {
      cpt++;
    }
  }
//   console.log("il y a " + cpt + " voitures");
  console.log(`${ cpt > 0 ? `il y a ` + cpt : "il n'y a aucunne"} voiture(s) de la marque ${marquerecherchee}.`);
}

rechercheParMarque("ford", ...tab);
