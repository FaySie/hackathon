/**
 * Part of hackathon project.
 *
 * @copyright  Copyright (C) 2017 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */
$(document).ready(function ()
{
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 8,
        paginationClickable: true,
        spaceBetween: 15,
        grabCursor: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });

    $('.add-favorite').on('click', function ()
    {
        $(this).toggleClass('add-success')
    });

    $('.go-start-test').on('click', function ()
    {
        $('.task-intro').addClass('start-test')
    });

    // Task Result
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        autoplay: false,
        arrows: true,
        focusOnSelect: true
    });

    /* User list */
    $('.layout-result .user').hover(
        function ()
        {
            $('.layout-result .user .user-list').removeClass('hide');
        },
        function ()
        {
            $('.layout-result .user .user-list').addClass('hide');
        }
    );

    $('.layout-result .user-list ul li').each(function ()
    {
        $(this).click(function ()
        {
            $('.layout-result .user .active').html($(this).html());
        });
    });
});