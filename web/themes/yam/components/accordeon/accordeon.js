(function(once) {

  Drupal.behaviors.yam__accordeon = {

    open: null,

    attach: function(context) {
      once('accordeon', '.accordeon', context).forEach(this.init.bind(this));
    },

    init: function(accordeon) {
      accordeon.classList.add('accordeon--inited');

      const items = accordeon.querySelectorAll('.accordeon-item');

      items.forEach(item => {
        const header = item.querySelector('.accordeon-item__header');
        const content = item.querySelector('.accordeon-item__content');

        header.addEventListener('click', () => {
          if (item.classList.contains('accordeon-item--open')) {
            item.classList.remove('accordeon-item--open');
            content.style.maxHeight = 0;
          } else {
            if (this.open) {
              this.open.classList.remove('accordeon-item--open');
              this.open.querySelector('.accordeon-item__content').style.maxHeight = 0;
            }

            item.classList.add('accordeon-item--open');
            content.style.maxHeight = content.scrollHeight + 'px';
            this.open = item;
          };

        });

      });

    },

  };

})(once);
