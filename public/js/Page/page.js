$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 50) {
        $(".navbar-default").addClass("menu-black").fadeIn(16000);
        $(".navbar-default .navbar-nav>li>a").addClass("menu-black-word").fadeIn(16000);
        $(".navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a").addClass("menu-black-active").fadeIn(16000);
    } else {
        $(".navbar-default").removeClass("menu-black").fadeOut(16000);
        $(".navbar-default .navbar-nav>li>a").removeClass("menu-black-word").fadeOut(16000)
        $(".navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a").removeClass("menu-black-active").fadeOut(16000);
    }
});

//function Page() {
//    this.init = function () {
//
//
//    }
//}
//
//obj = new Page();
//obj.init();


