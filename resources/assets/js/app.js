$(function(){
    // Glide
    var slider = $('.glide');
    if(slider.length){
        slider.glide({
            type: 'carousel',
            autoplay: 4000
        });
    }
});
