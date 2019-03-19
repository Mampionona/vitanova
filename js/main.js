jQuery(function($) {
  $('.avis-slider').owlCarousel({
    dots: false,
    items: 1,
    loop: true
  });

  $('.avantage-item').each(function(i, item) {
    var widget_container = $(item).find('.elementor-widget-container');
    widget_container.addClass('d-flex flex-wrap justify-content-between');
    $('<div />', { Class: 'bg-blue numero text-center', html: i + 1}).prependTo(widget_container);
  });

  function appendModificationLabel() {
    var slick = $('.elementor-image-carousel');
    var avant = '<div class="col-6"><div class="text d-inline-block">' + vitanova.avant + '</div></div>';
    var apres = '<div class="col-6"><div class="text d-inline-block">' + vitanova.apres + '</div></div>';
    var difference = $('<div />', {
      Class: 'modification position-absolute w-100',
      html: '<div class="row">' + avant + apres + '</div>'
    });
    difference.insertAfter(slick);
    slick.parent().addClass('modification-label');
  }

  $('.elementor-image-carousel').on({
    init: function (slick) {
      appendModificationLabel();
    },
    beforeChange: function (event, slick, currentSlide, nextSlide) {
      slick.$slider.closest('.modification-label').find('.modification').fadeOut(200);
    },
    afterChange: function (slick, currentSlide) {
      setTimeout(function() {
        $(slick.currentTarget).closest('.modification-label').find('.modification').fadeIn(200);
      }, 1200);
    }
  });

  $('.wpcf7-form').on('submit', function() {
    var url = window.location.href;
    goog_report_conversion(url);
  });
});
