$(function(){
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
            width: '100%',
            tags: false,
            tokenSeparators: [","],
            "language": {
                "noResults": function(){
                    return "Aún no hay opciones, escribe una...";
                }
            },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    }
});
