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

/*================================================================
  sidebarのactiveクラスのトグルアクション
================================================================ */
const lists = document.getElementsByClassName('news-side-link__item');
//現在のurlを取得
let url = '\'' + location.href + '\'';
//sidebarないで一致するurlがあったら、li にactive classをつける
for (let i = 0; i < lists.length; i++) {
  let list = lists[i];
  let href = list.getAttribute('onclick');

  if (!href) {
    href = list.children[0].getAttribute('href');
    href = '\'' + href +'\'';
  } else {
    href = href.replace('location.href=', '');
  }
  console.log(href);
  if (url == href) {
    list.classList.add('active');
   }

}
