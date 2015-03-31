var $k = jQuery.noConflict();

$k(document).ready(function() {
  $k('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $k(this.hash);
      target = target.length ? target : $k('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $k('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }

  });
});