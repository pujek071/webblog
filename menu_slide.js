$(function() {
    $('.slide .isi').hide();
    $('.slide h2:first').addClass('active').next().slideDown('show');
    $('.slide h2').click(function() {
        if($(this).next().is(':hidden')) {
            $('.slide h2').removeClass('active').next().slideUp('slow');
            $(this).toggleClass('active').next().slideDown('slow');
        }
    });
});