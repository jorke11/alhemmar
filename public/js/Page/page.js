$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 50) {
        $(".navbar-default").addClass("menu-black");
        $(".navbar-default .navbar-nav>li>a").addClass("menu-black-word")
        $(".navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a").addClass("menu-black-active");
    } else {
        $(".navbar-default").removeClass("menu-black");
        $(".navbar-default .navbar-nav>li>a").removeClass("menu-black-word")
        $(".navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a").removeClass("menu-black-active");
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


