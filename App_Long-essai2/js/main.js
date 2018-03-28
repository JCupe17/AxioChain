jQuery(function ($) {
	$.validator.addMethod('customemail',
		function (value, element) {
			return /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9])+$/.test(value);
		},
		'Invalid email'
	);

	$('.validate').each(function() {
		$(this).validate({
			rules: {
				email: {
					required:  {
						depends:function(){
							$(this).val($.trim($(this).val()));
							return true;
						}
					},
					customemail: true
				}
			}
		});
	});

    //Toggle panel
    $('.toggle-single').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $($(this).data('target')).toggleClass('active');
    });

    //Toggle popup
    $('.toggle-popup').click(function (e) {
        e.preventDefault();
        $('body').toggleClass('modal');
        $(this).toggleClass('active');
        $($(this).data('target')).toggleClass('active');
    });

    $('.close-btn').click(function () {
        $(this).parents('.popup-wrapper').removeClass('active');
        $('body').removeClass('modal');
    });

    $('a.anchor').on('click', function(e){
        e.preventDefault();

        if (this.hash && this.hash.length > 1) {
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 80
            }, 500);
        }
    });

    //Upload
    $('.upload input').change(function (e) {
        $(this).parents('.upload').find('.text').text(e.target.value.split('\\').pop());
    });
});