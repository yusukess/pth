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
  function initializeNewsSlick() {
    $('.slider-multiple').not('.slick-initialized').slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: '<button class="arrow-prev"></button>',
      nextArrow: '<button class="arrow-next"></button>',
    });
  }

  $(window).on('load resize orientationchange', () => {
    const windowWidth = $(window).width();
    if (windowWidth < 431) {
      // SPサイズ
      $('.slider-multiple.slick-initialized').slick('unslick');
    } else {
      // PCサイズ
      initializeNewsSlick();
    }
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

  const slider_area = [
    'entrance',
    'lounge',
    'lamp',
    'cabin',
    'guest-room',
    'open-garden',
    'activity-space',
    'owners-living',
    'kids',
    'parking',
    'emergency',
    'other',
    'disaster',
  ];

  const event = ['tanabata', 'halloween', 'illumination'];

  slider_area.forEach(($target) => {
    let tmp_setting = { ...slider_photo_setting_base };
    let tmp_nav_setting = { ...slider_photo_nav_setting_base };

    tmp_setting['asNavFor'] = '.' + $target + ' .slider-gallery_nav';
    tmp_nav_setting['asNavFor'] = '.' + $target + ' .slider-photo';

    $('.' + $target + ' .slider-photo').slick(tmp_setting);
    $('.' + $target + ' .slider-gallery_nav')
      .slick(tmp_nav_setting)
      .on('afterChange', function (event, slick, currentSlide) {
        const $this = $('.' + $target + ' .slider-gallery_nav');
        const sliderWidth = $this.innerWidth();
        const itemMargin = parseInt($this.find('.slick-slide').css('margin-right'), 10);
        const itemWidth = $this.find('.slick-slide').innerWidth() + itemMargin;

        // 現在のスライドに応じて横に自動スクロール
        function moveScroll() {
          var currentPosition = $('.' + $target + ' .slider-gallery_nav .slick-current').position().left;

          const scrollSize = currentPosition > sliderWidth ? currentPosition + itemWidth - sliderWidth : 0;

          $('.' + $target + ' .slider-gallery_nav .slick-list').animate(
            {
              scrollLeft: scrollSize,
            },
            300
          );
        }
        moveScroll();
      });
  });

  event.forEach(($target) => {
    let tmp_setting = { ...slider_photo_setting_base };
    let tmp_nav_setting = { ...slider_photo_nav_setting_base };

    tmp_setting['asNavFor'] = '.' + $target + ' .slider-gallery_nav';
    tmp_nav_setting['asNavFor'] = '.' + $target + ' .slider-photo';

    $('.' + $target + ' .slider-photo').each(function () {
      $(this).slick(tmp_setting);
    });

    $('.' + $target + ' .slider-gallery_nav').each(function () {
      $(this).slick(tmp_nav_setting);
    });
  });

  $('.slider-kv').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    $('.slider-kv').slick('slickPlay');
  });
};
