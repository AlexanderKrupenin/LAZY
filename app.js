// get ul
const ul = document.querySelector('ul');
// получаю фрагмент
const t = document.querySelector('#element-li');
 const span = t.content.querySelector('span'); 
 const a = t.content.querySelector('a');

span.textContent = 'Iphone 13 max pro super best';
// дубликат узла
let li = t.content.cloneNode(true);
ul.append(li);

span.textContent = 'Iphone 14 best of the best';
// дубликат узла
li = t.content.cloneNode(true);
ul.append(li);


span.textContent = 'Iph123est';
// дубликат узла
li = t.content.cloneNode(true);
ul.append(li);