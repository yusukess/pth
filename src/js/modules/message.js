import $ from 'jquery';
import Rellax from 'rellax';

export default () => {
  // 背景を暗くする処理
  if ($('body').hasClass('home')) {
    let scroll;

    window.addEventListener('scroll', () => {
      const objTop = $('.message_section').offset().top;
      scroll = $(window).scrollTop();

      if (scroll >= objTop) {
        scroll = (scroll - objTop) / 10;

        document.documentElement.style.setProperty(
          '--kv-overlay-opacity',
          Math.round(scroll) / 100 < 0.8 ? Math.round(scroll) / 100 : 0.8
        );
      }
    });
  }

  // 要素のアニメーション
  const target = document.querySelectorAll('.intersected');

  if (!target) return false;

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.dataset.intersected = true;
        }
      });
    },
    {
      threshold: 0,
      rootMargin: '0px 0px -30% 0px',
    }
  );
  target.forEach((e) => {
    observer.observe(e);
  });

  // パララックス対象要素のDOMを全て取得;
  const rellaxin = document.querySelectorAll('.is-parallax');
  rellaxin.forEach((el) => {
    const rellax = new Rellax(el, {
      relativeToWrapper: true,
      wrapper: el.parentElement,
    });
    window.addEventListener('scroll', () => {
      rellax.refresh();
    });
  });

  // 泡のアニメ
  document.addEventListener('DOMContentLoaded', () => {
    // コンテナを指定
    const section = document.querySelector('.message_section');

    if (!section) return false;

    // 泡を生成する関数
    const createBubble = () => {
      const bubbleEl = document.createElement('span');
      bubbleEl.className = 'bubble';
      const minSize = 10;
      const maxSize = 200;
      const size = Math.random() * (maxSize + 1 - minSize) + minSize;
      bubbleEl.style.width = `${size}px`;
      bubbleEl.style.height = `${size}px`;
      bubbleEl.style.left = Math.random() * innerWidth + 'px';
      section.appendChild(bubbleEl);

      // 一定時間が経てば泡を消す
      setTimeout(() => {
        bubbleEl.remove();
      }, 20000);
    };

    // 泡の生成を開始するトリガー（初期値はOFF）
    let activeBubble = null;

    // 泡の生成をストップする関数
    const stopBubble = () => {
      clearInterval(activeBubble);
    };

    // Intersection observerに渡すコールバック関数
    const cb = (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          activeBubble = setInterval(createBubble, 800);
        } else {
          stopBubble();
        }
      });
    };

    // Intersection observerに渡すオプション
    const options = {
      threshold: 0,
      rootMargin: '100px 0px',
    };

    // Intersection observerの初期化
    const io = new IntersectionObserver(cb, options);
    io.POLL_INTERVAL = 100; // Polyfill
    io.observe(section);
  });
};
