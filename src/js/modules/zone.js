/*====================
     *
     * ゾーン切り替え処理
     *
     ====================*/

import $ from 'jquery';

export default () => {
  let zone_anchor = $('.zone-anchor');
  let zone_section = $('.zone-section');
  let target_class_name;

  zone_anchor.on('click', function ($e) {
    // クリックした対象ゾーンを洗い出す

    target_class_name = $($e.currentTarget).attr('class').slice(12); //zone-anchorを削除

    if (target_class_name.indexOf('current') >= 0) {
      target_class_name = target_class_name.slice(0, -8); //currentを削除
    }

    // 全てのボタンからcurrentを外す
    zone_anchor.removeClass('current');
    zone_section.removeClass('current');

    // 同じゾーンのボタンを全てcurrentにする
    $('.zone-anchor.' + target_class_name).addClass('current');
    $('.zone-section.' + target_class_name).addClass('current');
  });
};
