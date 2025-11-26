(function(once) {

  Drupal.behaviors.yam__menu = {

    open: null,

    attach: function(context) {
      once('menu', '.menu--mobile', context).forEach(this.init.bind(this));
    },

    init: function(menu) {
      const content = menu.querySelector('.menu--mobile--content');
      const trigger = menu.querySelector('.menu--mobile--trigger');
      trigger.addEventListener('click', () => {
        this.toggleMenu(content, trigger);
      });
      content.addEventListener('click', () => {
      });
      content.querySelectorAll('ul li').forEach(li => {
        if (!li.querySelector('ul')) return;
        li.addEventListener('click', (ev) => {
          ev.preventDefault();
          li.children[1].classList.toggle('is-active');
        })
      });

    },
    toggleMenu(content, trigger, force) {
      content.classList.toggle('is-active', force);
      document.querySelector('.sheet').classList.toggle('transform', force);
      trigger.classList.toggle('is-active', force);
    }

  };

})(once);
