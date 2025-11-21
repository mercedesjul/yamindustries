(function(once) {
  Drupal.behaviors.yam__facts = {
    attach: function(context) {
      once('facts', '.facts', context).forEach(this.init.bind(this));
    },

    init: function(facts) {
      facts.classList.add('facts--inited');
      this.countupFacts(facts);
    },

    countupFacts: function(context) {
      const facts = context.querySelector('.facts__facts-wrapper');
      const numberBoxes = context.querySelectorAll('.facts__fact-number');
      const script = this;

      function onScroll() {
        if (!facts || script.inited) return;

        const elementTop = facts.offsetTop;
        const elementBottom = elementTop + facts.offsetHeight;
        const viewportTop = window.scrollY;
        const viewportBottom = viewportTop + window.innerHeight;

        if (elementBottom > viewportTop && elementTop < viewportBottom) {
          script.inited = true;

          let min = Infinity;
          numberBoxes.forEach(el => {
            const n = parseFloat(el.textContent);
            if (n < min) min = n;
          });

          numberBoxes.forEach(el => {
            const nContent = parseFloat(el.textContent);
            const countSuffix = el.getAttribute('data-count-suffix') || '';
            const options = {
              useEasing: true,
              easingFn: script.easingFn,
              useGrouping: true,
              separator: '',
              decimal: ',',
              suffix: countSuffix,
            };
            new CountUp(el, nContent - min, nContent, 2, 3, options).start();
          });

          window.removeEventListener('scroll', onScroll);
        }
      }

      window.addEventListener('scroll', onScroll);
    },

    easingFn: function(t, b, c, d) {
      const ts = (t /= d) * t;
      const tc = ts * t;
      return b + c * (tc + -3 * ts + 3 * t);
    },
  };
})(once);
