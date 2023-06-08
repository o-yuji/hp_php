$(function(){
    $('.accordion span').on('click',function(){
        $(this).next('ul').slideToggle();
        $(this).toggleClass('open');
    });
});