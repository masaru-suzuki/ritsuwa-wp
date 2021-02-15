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
// console.log(list);
const pageEventSidebar = document.getElementById('page-event-sidebar');
const singlePostSidebar = document.getElementById('single-post-sidebar');
// console.log(category);

// // console.log(active_list);
// let activeTarget = '';
// let url = location.search;
// // console.log(url)

// if (url === '?id=2') {
//   console.log('id=2');
// } else if(url === '?id=3') {
//   console.log('id=3');
//   let catId = url;
//   // console.log(catId);
// }


// //sidebarのリンクをクリックされたら
// for (let i = 0; i < lists.length; i++) {
//   let list = lists[i];
//   // console.log(list);
//   list.addEventListener('click', () => {
//     list.classList.add('active');
//     //すでに"active"クラスのついている要素を検出
//       let active_list = pageEventSidebar.getElementsByClassName('active')[0];
//       if (active_list) {
//         console.log('ある');
//       } else {
//         active_list = singlePostSidebar.getElementsByClassName('active')[0];
//       }
//       console.log(active_list);
//     //"active"クラスの削除
//       active_list.classList.remove('active');
//   //ページのパスやクエリから該当ページを割り出す  <=ここだけ考えればよかったーー

//   //該当ページの要素に"active"クラスをつける
//   })

// }

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
