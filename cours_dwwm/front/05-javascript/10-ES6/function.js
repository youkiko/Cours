/**
 *fonction qui prend une liste de nombre non limitées
 et qui renvoie l'addition de ses nombre
 @author Geoffrey Lepers <geoffreylepers@gmail.com>
 * @param  {...any} args
 * @returns 
 */
function addition(...args) {
  let result = 0;
  for (const nombre of args) result += nombre;
  return result;
}

const result = addition(1, 4, 6, 7, 89, 67, 78);
console.log(result);
