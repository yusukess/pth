export default () => {
  const target = document.querySelectorAll('.inview_item');

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
      threshold: 0.5,
    }
  );
  target.forEach((e) => {
    observer.observe(e);
  });
};
