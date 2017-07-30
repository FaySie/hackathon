/**
 * Part of hackathon project.
 *
 * @copyright  Copyright (C) 2017 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */
$(document).ready(function () {
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		slidesPerView: 8,
		paginationClickable: true,
		spaceBetween: 15,
		grabCursor: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
	});

	$('.add-favorite').on('click',function(){
		$(this).toggleClass('add-success')
	});

	$('.go-start-test').on('click', function(){
		$('.task-intro').addClass('start-test')
	});
});

window.Test = window.Test || {
    /**
     * nextStep
     *
     * @param link_id
     */
    nextStep: function (link_id) {
        console.log('next_step');

        $.ajax({
            method: "POST",
            url: Phoenix.Router.route('next_step'),
            data: {
                link_id: link_id
            }
        }).done(function (result) {
            if (result.success)
            {
                $('#test-area').html(result.data.html);
            }
        });
    }
};