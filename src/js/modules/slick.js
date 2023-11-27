/*====================
     *
     * slickスライダー
     *
     ====================*/
import $ from 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css';

export default () => {
  // top > newsのスライダー
  $('.slider-multiple').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="arrow-prev"></button>',
    nextArrow: '<button class="arrow-next"></button>',
    responsive: [
      {
        breakpoint: 431,
        settings: 'unslick',
      },
    ],
  });

  $(window).on('resize orientationchange', function () {
    $('.slider-multiple').slick('resize');
  });

  // top > キービジュアルのスライダー
  $('.slider-kv').on('init', function (event, slick) {
    $('.kv-section-inner').addClass('slick-init');
  });

  $('.slider-kv').slick({
    infinite: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    speed: 1800,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    waitForAnimate: false,
    responsive: [
      {
        breakpoint: 431,
      },
    ],
  });

  // SPでスライダーが止まるのを防止
  $('.slider-kv.index').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    $('.slider-kv.index').slick('slickPlay');
  });

  // ギャラリースライダー（共有施設・ギャラリー）
  let slider_photo_setting_base = {
    infinite: true,
    asNavFor: '.slider-gallery_nav',
    prevArrow: '<button class="arrow-prev"></button>',
    nextArrow: '<button class="arrow-next"></button>',
  };

  // ギャラリースライダーのナビゲーションスライダー（共有施設・ギャラリー）
  let slider_photo_nav_setting_base = {
    infinite: true,
    slidesToShow: 20,
    slidesToScroll: 1,
    asNavFor: '.slider-photo',
    focusOnSelect: true,
    swipeToSlide: true,
    arrows: false,

    responsive: [
      {
        breakpoint: 431,
        slidesToShow: 3,
      },
    ],
  };

  const common_facilities_area = [
    'entrance',
    'lounge',
    'guest-room',
    'open-garden',
    'activity-space',
    'cabin',
    'owners-living',
    'kids',
    'parking',
    'emergency',
    'other',
  ];

  const event = ['tanabata', 'halloween', 'illumination'];

  common_facilities_area.forEach(($target) => {
    let tmp_setting = { ...slider_photo_setting_base };
    let tmp_nav_setting = { ...slider_photo_nav_setting_base };

    tmp_setting['asNavFor'] = '.' + $target + ' .slider-gallery_nav';
    tmp_nav_setting['asNavFor'] = '.' + $target + ' .slider-photo';

    $('.' + $target + ' .slider-photo').slick(tmp_setting);
    $('.' + $target + ' .slider-gallery_nav').slick(tmp_nav_setting);
  });

  event.forEach(($target) => {
    let tmp_setting = { ...slider_photo_setting_base };
    let tmp_nav_setting = { ...slider_photo_nav_setting_base };

    tmp_setting['asNavFor'] = '.' + $target + ' .slider-gallery_nav';
    tmp_nav_setting['asNavFor'] = '.' + $target + ' .slider-photo';

    $('.' + $target + ' .slider-photo').each(function () {
      console.log('hoge');
      $(this).slick(tmp_setting);
    });

    $('.' + $target + ' .slider-gallery_nav').each(function () {
      $(this).slick(tmp_nav_setting);
    });
  });
};
