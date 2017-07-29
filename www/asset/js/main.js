/**
 * Part of hackathon project.
 *
 * @copyright  Copyright (C) 2017 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */
$(document).ready(function () {
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		slidesPerView: 10,
		paginationClickable: true,
		spaceBetween: 30,
		grabCursor: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
	});

	$('.add-favorite').on('click',function(){
		$(this).toggleClass('add-success')
	})

	$('.go-start-test').on('click', function(){
		$('.task-intro').addClass('start-test')
	})
});