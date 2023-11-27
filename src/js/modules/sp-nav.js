/*====================
     *
     * ゾーン切り替え処理
     *
     ====================*/
import $ from 'jquery';

export default () => {
  const ham = $('.site-header_hamburger'); //js-hamburgerの要素を取得し、変数hamに格納
  const nav = $('.site-header_panel'); //js-navの要素を取得し、変数navに格納
  ham.on('click', function () {
    //ハンバーガーメニューをクリックしたら
    ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
    nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し
    $('html').toggleClass('active');
  });
};
