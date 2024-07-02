// wp-pre-loader.js
jQuery(window).on('load', function() {
    jQuery('#preloader').fadeOut('slow', function() {
        jQuery(this).remove();
    });
});
