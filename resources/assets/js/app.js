$(function(){

    var $body = $('body'),
        $window = $(window);

    // Glide
    var slider = $('.glide');
    if(slider.length){
        slider.glide({
            type: 'carousel',
            autoplay: 4000
        });
    }

    // Select2
    var selects2 = $('.select2');
    if(selects2.length){
        selects2.select2({
            width: '100%'
        });
    }

    // Dropdown
    var dropdown = $('.dropdown');
    if(dropdown){
        $window.click(function() {
            dropdown.find('.submenu').removeClass('open');
        });
        dropdown.click(function(e) {
            if ($(e.target).hasClass('link'))
                return true;
            $(this).find('.submenu').toggleClass('open');
            return false;
        });
    }
});
