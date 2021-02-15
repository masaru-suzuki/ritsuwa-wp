'use strict';

const startWindowSize = window.innerWidth;
let windowSize = window.innerWidth;
const breakpoint = 768;
const sp = 400;
const md = 768;


/*================================================================
スムーススクロール
================================================================*/
// イージング関数
var Ease = {
  easeInOut: t => t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1
}
// アニメーションの Duration の設定
var duration = 500;

// 移動さきの要素の上の余白
//headerの余白を考えて少し上にずらす必要があるため。
//facilityページでのみ

let targetPositionPadding = 0;
if (windowSize > md) {
  targetPositionPadding = 0;
} else if (windowSize <= sp) {
  targetPositionPadding = 64;
} else {
  targetPositionPadding = 80;
}

const smoothScroll = smoothScrollTrigger => {
   // トリガーをクリックした時に実行
    smoothScrollTrigger.addEventListener('click', function (e) {

      // href属性の値を取得
      var href = smoothScrollTrigger.getAttribute('href');

      // 現在のスクロール位置を取得（クロスブラウザに対応）
      var currentPostion = document.documentElement.scrollTop || document.body.scrollTop;

      // スクロール先の要素を取得
      var targetElement = document.getElementById(href.replace('#', ''));

      // スクロール先の要素が存在する場合はスムーススクロールを実行
      if (targetElement) {

        // デフォルトのイベントアクションをキャンセル
        e.preventDefault();
        e.stopPropagation();

        // スクロール先の要素の位置を取得
        var targetPosition = window.pageYOffset + targetElement.getBoundingClientRect().top - targetPositionPadding;// headerと余白の分だけずらす

        // スタート時点の時間を取得
        var startTime = performance.now();

        // アニメーションのループを定義
        var loop = function (nowTime) {

          // スタートからの経過時間を取得
          var time = nowTime - startTime;

          // duration を1とした場合の経過時間を計算
          var normalizedTime = time / duration;

          // duration に経過時間が達していない場合はアニメーションを実行
          if (normalizedTime < 1) {

            // 経過時間とイージングに応じてスクロール位置を変更
            window.scrollTo(0, currentPostion + ((targetPosition - currentPostion) * Ease.easeInOut(normalizedTime)));

            // アニメーションを継続
            requestAnimationFrame(loop);

          // duration に経過時間が達したら、アニメーションを終了
          } else {
            window.scrollTo(0, targetPosition);
          }

        }

        // ハンバーガーメニューの開閉設定
        globalMenuSp.classList.remove('active');
        hamburger.classList.remove('active');
        logo.classList.remove('active');
        headerNav.classList.remove('active')
        hamburgerToggle = false;

        // アニメーションをスタート
        requestAnimationFrame(loop);
      }
    });
}



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




window.addEventListener('DOMContentLoaded', () => {

  // スムーススクロールのトリガーを取得
  var smoothScrollTriggers = document.querySelectorAll('a[href^="#"]');

  smoothScrollTriggers.forEach(function (smoothScrollTrigger) {
    smoothScroll(smoothScrollTrigger);

  });

});
