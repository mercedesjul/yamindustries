(function (once) {

  Drupal.behaviors.yam__sheet = {
    sheet: null,

    attach: function (context) {
      once('sheet', '.sheet', context).forEach(this.init.bind(this));
    },
    init:() => {},

  };

})(once);
