$(function(){

    var $body = $('body'),
        $window = $(window),
        base_url = window.location.origin;

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

    // var single_product = $('#single-product');
    // if(single_product.length){
    //     var qty
    // }
    //

    // Checkout
    var checkout = $('#checkout');
    if(checkout.length){
        var checkbox_payment = $('.checkbox_payment');

        checkbox_payment.on('change', function(){
            var id = $(this).attr('id'),
                method_form = $('.method-form');
            method_form.slideUp();
            method_form.filter('[data-payment="'+id+'"]').slideDown();
        });

        var submit = $('#submit');

        submit.click(function(){
            var $form = $('#checkout_form'),
                payment_method = $form.find('.checkbox_payment:checked').val();

            if(payment_method == 'card'){
                Conekta.setPublishableKey('key_CRJsKzb8KKqRzRMnS1tSvFQ');

                var conektaSuccessResponseHandler = function(token) {
                    var $form = $("#checkout_form");
                    //Add the token_id in the form
                    $form.append($("<input type='hidden' id='conektaTokenId'>").val(token.id));
                    $form.get(0).submit(); //Submit
                };

                var conektaErrorResponseHandler = function(response) {
                    var $form = $("#checkout_form");
                    $form.find(".card-errors").text(response.message);
                    $form.find("#submit").prop("disabled", false);
                };

                $("#checkout_form").submit(function(event) {
                    var $form = $(this);
                    // Prevents double clic
                    $form.find("#submit").prop("disabled", true);
                    Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
                    return false;
                });
            }
            $form.submit();
        });

    }

    // Notifications
    var notification = $('.notification');
    if(notification.length){
        notification.delay(4000).slideUp();
        $body.on('click', '.close-notification', function(){
            notification.slideUp();
        });
    }

    // Cart
    var cart = $('#cart');
    if(cart.length){

        // Set totals
        function set_totals(tr){
            if(tr){
                var id = tr.data('id'),
                    input_quantity = tr.find('.qty'),
                    hidden_quantity = tr.find('[name*=quantity]'),
                    quantity = (input_quantity.val() != '') ? parseFloat(input_quantity.val()) : 1,
                    price = parseFloat(tr.find('.product-price').data('price')),
                    product_total = quantity * price,
                    span_product_total = tr.find('.product-total');
                hidden_quantity.val(quantity);
                span_product_total.text(product_total.toFixed(2));
            }
            var table = $('.table'),
                totals = table.find('.product-total'),
                span_subtotal = table.find('.subtotal'),
                subtotal = 0;

            totals.each(function(){
                var product_total = parseFloat($(this).text());
                subtotal = subtotal + product_total;
            });

            span_subtotal.text(subtotal.toFixed(2));
        }// End set_totals

        set_totals();

        var table = cart.find('.table');

        $body.on('keyup', '.qty', function(){
            var tr = $(this).closest('tr');
            set_totals(tr);
        });

        $body.on('click', '.delete-item', function(){
            var $this = $(this),
                id = $this.data('id'),
                token = $this.data('token');
            $.ajax({
                url: base_url+'/carrito/'+id,
                type: 'post',
                data: {quantity: id, _method: 'DELETE', _token: token},
                success: function(data){
                    if(data == 'success')
                        location.reload();
                }
            });
            return false;
        });
    }
});
