let tabuser = [
  {
    nom: `emile`,
    age: 34,
  },
  {
    nom: `perinne`,
    age: 27,
  },
  {
    nom: `laura`,
    age: 17,
  },
];
const rechercheutilisateur = (nomrecherche, rechercheage) => {
  let i = 0;
//   let j = 0
  for (const user of tabuser) {
    const { nom, age } = user;
    if (nomrecherche === nom ){
        i++;
        if (age >= rechercheage) {
            i++;
        }
    }
      
      console.log(i)
    }
  
  if (i = 2) {
    console.log(`${nomrecherche} existe bien et majeur`);
  } else {
    console.log(`${nomrecherche} n'existe pas  `);
  }
}

//appels
rechercheutilisateur(`perinne`); //existe
rechercheutilisateur(`paul`); // existe pas
rechercheutilisateur(18);