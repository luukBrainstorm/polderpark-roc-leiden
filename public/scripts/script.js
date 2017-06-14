$("#menu").click(function () {
    $(".nav").toggleClass('is-open');
    $(".overlay").toggleClass('is-visible');
    $(this).toggleClass('open');
});