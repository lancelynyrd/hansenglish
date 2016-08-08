jQuery(function($) {
    var scrollDebounce = _.debounce(scrollDebounced, 200);
    $(window).scroll(scrollDebounce);
    function scrollDebounced() {
        var $sidebar = $('.sidebar');
        //var p = $sidebar.position();
        //var t = $('body').scrollTop(); not working on IE
        var w = $(window).scrollTop();
        var g = w + 150;
        //if ($(window).width() > 1200) {
        $sidebar.animate({ top: g}, 800);
        //}
    }
});