jQuery(function() {
    jQuery('button').on('click', function () {
        var pageUrl = jQuery(this).attr("page-url");

        window.location.href = pageUrl;
		  
    });
});