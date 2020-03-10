(function( $ ) {
 
    "use strict";
     
    $(document).ready(function () {

        const { __, _x, _n, sprintf } = wp.i18n;

        var test = __('Hello World (jquery)', 'translation');
        
        $(".test").text(test);
        
        
    } ); 
 
})(jQuery);