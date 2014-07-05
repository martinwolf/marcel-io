$(document).ready(function() {

    var sliders = [];

    $('.device-slider').each(function(i, slider) {
        sliders[i] = $(slider).bxSlider({
            mode: 'fade',
            touchEnabled: false,
            pager: false,
            prevText: 'Previous',
            nextText: 'Next'
        });
    });

    $('.wrap--slider').not('.is-active').addClass('is-hidden');

    $('.switcher-list a').on('click', function(ev) {

        var target = $($(this).attr('href'));
        
        $(this)
            .addClass('is-active')
            .parent().siblings().find('a').removeClass('is-active');

        $('.section--' + $(this).data('section')).find('.wrap--slider.is-active')
            .addClass('fadeout')
            .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
                    $(this)
                        .removeClass('fadeout')
                        .removeClass('is-active')
                        .addClass('is-hidden');

                target
                    .addClass('fadein')
                    .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) { 
                         target
                            .removeClass('fadein')
                            .removeClass('is-hidden')
                            .addClass('is-active');
                    });
                    
            });
        
        ev.preventDefault();
    });

});
