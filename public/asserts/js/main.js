$(document).ready(function() {

    console.log('tg');

    $(".btn-primary").click(function() {
        $('html').animate({
            scrollTop: $("#services").offset().top},
            'slow');
    });
  
});