'use strict';

const startWindowSize = window.innerWidth;
let windowSize = window.innerWidth;
const breakpoint = 768;
const sp = 400;
const md = 768;


/*================================================================
  hamburger のトグルアクション
================================================================ */
const hamburger = document.getElementsByClassName('hamburger')[0];
const logo = document.getElementsByClassName('header__logo')[0];
// const txt = document.getElementsByClassName('')[0];
const headerNav = document.getElementsByTagName('header')[0]
const globalMenuSp = document.getElementsByClassName('globalMenuSp')[0];
const globalMenuLi = document.getElementsByClassName('globalMenuLi');
let isClick_globalMenuLi = false;
let hamburgerToggle = false;

hamburger.addEventListener('click', () => {
if (hamburgerToggle === false) {
    hamburgerToggle = true;
      hamburger.classList.add('active');
      // logo.classList.add('active'); /*こだわりページの時に消さなければならないのを制御する必要あり */
      headerNav.classList.add('active');
      globalMenuSp.classList.add('active');
} else {
  hamburger.classList.remove('active');
  globalMenuSp.classList.remove('active');
  // logo.classList.remove('active');
  headerNav.classList.remove('active');
  hamburgerToggle = false;
  }
});




/*================================================================
ふわっと出てくるアニメーション
================================================================*/
// ScrollReveal().reveal('.fade', {
//   distance: "50px",
//   opacity: 0,
//   duration: 1500, // アニメーションの完了にかかる時間
//   viewFactor: 0.1, // 0~1,どれくらい見えたら実行するか
//   reset: true,   // 何回もアニメーション表示するか
//   origin: "bottom"
// });
