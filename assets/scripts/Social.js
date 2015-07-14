/**
 *
 * @type {{init: Function, facebook: Function, twitter: Function, googleplus: Function}}
 */
Social = {

  init: function() {

    this.facebook();
    this.twitter();
    this.googleplus();
    //this.linkedIn();
    this.mail();
    //this.initCta();

  },

  initCta: function() {

    $("[data-togglesocial-links-trigger='1']").on('click', function(event) {

      event.preventDefault();

      var $parentElm = $(this).parents('.article__footer:first');

      $parentElm
        .find('.article__social__links')
        .toggle();


      if(Utils.getResponsiveTag() === 'xs' || $(this).parents('.col--narrow').length === 1) {

        $parentElm.
          find('.article__time')
          .toggle();

      }

    });

  },

  /**
   *
   */
  facebook: function() {

    var $triggers = $("[data-facebook-share-trigger='1']");

    $triggers.on('click', function(event) {

      event.preventDefault();

      Social.windowOpen($(this).attr('href'), 626, 436, 'Facebook', $(this).attr('data-url'));

    });

  },

  /**
   *
   */
  twitter: function() {

    var $triggers = $("[data-twitter-share-trigger='1']");

    $triggers.on('click', function(event) {

      event.preventDefault();

      Social.windowOpen($(this).attr('href'), 600, 400, 'Twitter', $(this).attr('data-url'));

    });

  },

  /**
   *
   */
  googleplus: function() {

    var $triggers = $("[data-googleplus-share-trigger='1']");

    $triggers.on('click', function(event) {

      event.preventDefault();

      Social.windowOpen($(this).attr('href'), 600, 600, 'Google+', $(this).attr('data-url'));

    });

  },

  linkedIn: function() {

    var $triggers = $("[data-linkedin-share-trigger='1']");

    $triggers.on('click', function(event) {

      event.preventDefault();

      Social.windowOpen($(this).attr('href'), 600, 600, 'LinkedIn', $(this).attr('data-url'));

    });

  },

  mail: function() {

    var $triggers = $("[data-mail-share-trigger='1']");

    $triggers.on('click', function(event) {

      Social.trackEvent('share-btn-clicked', $(this).attr('data-url'), 'Mail');

    });

  },

  /**
   *
   */
  trackEvent: function(category, action, label) {

    if (typeof __gaTracker === 'function') {
      __gaTracker('send', 'event', category, action, label);
    }

  },

  /**
   *
   * @param href
   * @param width
   * @param height
   */
  windowOpen: function(href, width, height, type, urlToShare) {

    Social.trackEvent('share-btn-clicked', urlToShare, type);

    window.open(href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=' + height + ',width=' + width);

  }

};