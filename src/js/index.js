import spnav from './modules/sp-nav';
spnav();

import zone from './modules/zone';
zone();

import message from './modules/message';
message();

import slick from './modules/slick';
slick();

import lightbox from './modules/lightbox';
lightbox();

import scroll from './modules/scroll';
scroll();

import wave from './modules/wave';
wave();

import inview from './modules/inview';
inview();

(function ($) {
  /*====================
     *
     * くじら
     *
     ====================*/
  const elem = document.querySelector('.concept_kv_bubble');
  console.log('elem: ', elem);
  if (elem !== null) {
    let target = document.getElementsByClassName('concept_kv_bubble');
    let parallaxConfig = {
      delay: 0, // スクロール止めてから動く秒数
      orientation: 'up', // 動く方向
      scale: 2, // 動く大きさ
    };
    const parallax_instance = new simpleParallax(target, parallaxConfig);
  }

  $(window).on('scroll', function () {
    var elem = $('.concept_heading');
    var isAnimate = 'animation-start';

    elem.each(function () {
      var elemOffset = $(this).offset().top - 400;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();

      if (scrollPos > elemOffset - wh + wh / 2) {
        $(this).addClass(isAnimate);
      }
    });
  });

  /*====================
     *
     * Google map
     *
     ====================*/
})(jQuery);
