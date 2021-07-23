$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbars').addClass("sticky");
        } else {
            $('.navbars').removeClass("sticky")
        }
    });
    $('.menu-btn').click(function(){
        $('.navbars .menu').toggleClass("active");
        $('.navbars-btn i').toggleClass("active")
    })
});
