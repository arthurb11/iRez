

$(function() {
    console.log('ok');
    $('a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});