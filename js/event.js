'use strict';


/*================================================================
  お知らせページのカードアクション
================================================================ */
const cards = document.getElementsByClassName('news-card');
function addHoverClass(id_value) {
  const target = document.getElementById(id_value);
  const card = target.parentElement;
  const image = target.nextElementSibling.nextElementSibling;
  card.classList.add('hover');
  image.classList.add('hover');

}
function removeHoverClass(id_value) {
  const target = document.getElementById(id_value);
  const card = target.parentElement;
  const image = target.nextElementSibling.nextElementSibling;
  card.classList.remove('hover');
  image.classList.remove('hover');
}
