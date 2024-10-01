let tab = ["bleu", "rouge", "vert"];
let tab1 = ["rose", "bleu", "blanc"];

// tab.push("gris");
// console.log(tab);
// tab = [...tab, "violet", "noir"];
// console.log(tab);

let tab2 = tab.concat(tab1); //fusionne les deux tableaux
let tab3 = [...tab, ...tab1] //fusionne les deux tableaux

console.log(tab2);
console.log(tab3);
