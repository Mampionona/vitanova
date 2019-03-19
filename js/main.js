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
});
