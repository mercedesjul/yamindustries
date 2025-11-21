(function (Drupal) {


  Drupal.behaviors.filterForm = {
    forceOpen: false,
    attach(context) {
      const elements = context.querySelectorAll('.filter-form');
      elements.forEach(element => {
        if (element.dataset.filterFormProcessed) {
          return;
        }
        element.dataset.filterFormProcessed = 'true';

        const form_wrapper = element.querySelector('.filter-form--form');
        const trigger = element.querySelector('.filter-form--trigger');
        const form = element.parentElement;

        if (!form_wrapper || !trigger || !form) {
          return;
        }

        if (this.forceOpen) {
          form_wrapper.classList.add('is-active');
        }

        element.querySelectorAll('select').forEach(
          s => s.addEventListener('change', (e) => {
            form.querySelector('[type="submit"]').click();
            this.forceOpen = true;
          })
        );

        trigger.addEventListener('click', (e) => {
          form_wrapper.classList.toggle('is-active');
        });

        form.addEventListener('submit', (e) => {
          form_wrapper.classList.add('is-active');
          this.forceOpen = true;
        });
      });
    },
  };

})(Drupal);
