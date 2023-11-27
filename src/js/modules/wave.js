/*====================
     *
     * 波
     *
     ====================*/
import $ from 'jquery';
import 'jquery-simplyscroll';

export default () => {
  $('.scroller01').each(function () {
    $(this).simplyScroll({
      pauseOnHover: false,
      pauseOnTouch: false,
      speed: 3,
    });
  });

  $('.scroller02').each(function () {
    $(this).simplyScroll({
      pauseOnHover: false,
      pauseOnTouch: false,
      speed: 2,
      initialOffset: 800,
    });
  });

  $('.scroller03').each(function () {
    $(this).simplyScroll({
      pauseOnHover: false,
      pauseOnTouch: false,
      speed: 1,
    });
  });
};
