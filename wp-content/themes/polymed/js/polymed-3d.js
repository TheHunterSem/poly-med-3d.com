jQuery(document).ready(function ($) {

    $('a[href^="#"]').click(function(){
//Сохраняем значение атрибута href в переменной:
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    if (window.location.hash) {
        scroll(0, 0);
        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 1500, 'swing');
    }

    var plusBtn = $('.key-wrapper .key-block .plus-btn');
    var infoBlock = $(plusBtn).parent().parent().find('.key-info-block');

    $(plusBtn).on('click', function () {
        if(!$(this).hasClass('active')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }

        $(infoBlock).stop().slideToggle();

    });


});