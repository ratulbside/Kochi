jQuery(function() {
    jQuery('button').on('click', function () {
        var pageUrl = jQuery(this).attr("page-url");

        window.location.href = pageUrl;
		  
    });

    //sticky
    var top = jQuery('.sticky-button').offset().top;
    jQuery(window).scroll(function (event) {
      var y = jQuery(this).scrollTop();
          if (y >= top) {
            jQuery('.sticky-button').addClass('fixed');
          } else {
            jQuery('.sticky-button').removeClass('fixed');
          }
          jQuery('.sticky-button').width(jQuery('.sticky-button').parent().width());
        });
});