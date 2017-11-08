$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 50) {
        $(".navbar-default").removeClass("menu-white").addClass("menu-black").fadeIn(300);
        $(".navbar-default .navbar-nav>li>a").addClass("menu-black-word").fadeIn(300);
        $(".navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a").addClass("menu-black-active").fadeIn(300);
    } else {
        $(".navbar-default").removeClass("menu-black").addClass("menu-white");
        $(".navbar-default .navbar-nav>li>a").removeClass("menu-black-word").addClass("menu-white-word").fadeIn(300);
//        $(".navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a").removeClass("menu-black-active").fadeOut(300);


    }
});

function Page() {
    this.init = function () {
        $("#logo-menu").attr("src", "../../img/logo70x32.png");
    }
}
//
obj = new Page();
obj.init();


