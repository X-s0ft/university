$(document).ready(function () {

    var body = $('body');
    var html = $('html');
    var link = $('.menu-link');
    var link_active = $('.menu-link_active');
    var menu_ul = $('.menu_ul');
    var nav_link = $('.menu_ul a')

    link.click(function () {
        link.toggleClass('menu-link_active');
        body.toggleClass('fixed');
        html.toggleClass('fixed');
        menu_ul.toggleClass('menu_ul_active');
    });
    nav_link.click(function () {
        link.toggleClass('menu-link_active');
        menu_ul.toggleClass('menu_ul_active');
    });

})