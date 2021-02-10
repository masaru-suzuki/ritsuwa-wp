'use strict';

const startWindowSize = window.innerWidth;
let windowSize = window.innerWidth;
const breakpoint = 768;
const sp = 400;
const md = 768;

/*================================================================
スマホを横にした時にリロードする
================================================================*/
window.addEventListener("orientationchange", () => location.reload());


/*================================================================
背景遅延
================================================================*/
/* 背景遅延が発生する箇所のclassを 'parallax_box'とする */
/* 背景遅延が発生するimg要素のclassを 'picture'とする */
const parallax_box = document.getElementsByClassName('parallax_box');
const parallax_target = document.getElementsByClassName('parallax_target');
const parallax = () => {
  let speed = 0;//パララックス用のスクロール速度
  let positionTop = 0;//media query用のbackgroundposition(Y軸)
  let positionLeft = 0;//media query用のbackgroundposition(X軸)

  for (let i = 0; i < parallax_box.length; i++) {
    let parallax_window_position = parallax_box[i].getBoundingClientRect().top;//parallax_boxの位置（画面上からの距離)
    let parallax_position = parallax_window_position + scrollY;//parallax_boxの位置（ページトップからの距離）

      if (windowSize > md) {
        //pc画面
        speed = -0.2;
        positionTop = -100;
        positionLeft = '50%';
    } else if (md >= windowSize > sp) {
        //md画面
      positionTop = 100;
        speed = -0.2;
        positionLeft = '50%';
    } else {
        //sp画面
      positionTop = 0;
        speed = -0.2;
        positionLeft = '50%';
      }

      if (scrollY > parallax_position) {
        let position = (scrollY - parallax_position) * speed + positionTop +'px';
        parallax_target[i].style.backgroundPosition = positionLeft + position;
      } else {
        parallax_target[i].style.backgroundPosition = positionLeft + positionTop + 'px';
      }
    }
}



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
  console.log('pc')
  targetPositionPadding = 0;
} else if (windowSize <= sp) {
  console.log('sp')
  targetPositionPadding = 64;
} else {
  console.log('md')
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
  施設ページのプラスボタンのトグルアクション
================================================================ */
let plusBtns = document.getElementsByClassName('icon-plus');
let areaItems = document.getElementsByClassName('facilities-area__item');
let areaLinks = document.getElementsByClassName('btn-arrow-down');
let plusBtnToggle = [false, false, false, false, false, false];



for (let i = 0; i < plusBtns.length; i++) {
  let areaLink = areaLinks[i]
  let plusBtn = plusBtns[i];
  let area = areaItems[i];

  //activeクラスをつける関数
  const togglePlusBtn = () => {
    plusBtnToggle[i] = !plusBtnToggle[i];
      if (plusBtnToggle[i] === true) {
        area.classList.add('active');
        plusBtn.classList.add('active');
      } else {
        area.classList.remove('active');
        plusBtn.classList.remove('active');
      }
  }
  //クリックアクション
  areaLink.addEventListener('click', () => {
    togglePlusBtn();
  })
  plusBtn.addEventListener('click', () => {
    console.log('click');
    togglePlusBtn();
  })
}

/*================================================================
  お知らせページのカードアクション
================================================================ */
const cards = document.getElementsByClassName('news-card');
function addHoverClass(id_value) {
  const target = document.getElementById(id_value);
  const card = target.parentElement;
  const image = target.nextElementSibling.nextElementSibling;
  console.log(card);
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
  onclickで特定のurlへリンクする
================================================================ */


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
      logo.classList.add('active'); /*こだわりページの時に消さなければならないのを制御する必要あり */
      headerNav.classList.add('active');
      globalMenuSp.classList.add('active');
} else {
  hamburger.classList.remove('active');
  globalMenuSp.classList.remove('active');
  logo.classList.remove('active');
  headerNav.classList.remove('active');
  hamburgerToggle = false;
  }
});




/*================================================================
ふわっと出てくるアニメーション
================================================================*/
ScrollReveal().reveal('.fade', {
  distance: "50px",
  opacity: 0,
  duration: 1500, // アニメーションの完了にかかる時間
  viewFactor: 0.1, // 0~1,どれくらい見えたら実行するか
  reset: true,   // 何回もアニメーション表示するか
  origin: "bottom"
});

/*================================================================
functionの実行
================================================================*/
window.onscroll = () => {
  parallax();
}



window.addEventListener('DOMContentLoaded', () => {

  // スムーススクロールのトリガーを取得
  var smoothScrollTriggers = document.querySelectorAll('a[href^="#"]');

  smoothScrollTriggers.forEach(function (smoothScrollTrigger) {
    smoothScroll(smoothScrollTrigger);

  });

});
