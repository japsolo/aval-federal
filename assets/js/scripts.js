/* global $ */

// Main-Nav
$('.toggle-nav').click(function (e) {
	e.preventDefault();
	$('.main-nav').slideToggle(350);
});

// Sticky-Top-Button
var headerTop = $('.main-header').offset().top;
var headerBottom = headerTop + 500;
$(window).scroll(function () {
	var scrollTop = $(window).scrollTop();
	if (scrollTop > headerBottom) {
		if ($('#btn-top').is(':hidden')) {
			$('#btn-top').fadeIn('slow');
		}
	} else {
		$('#btn-top').fadeOut('fast');
	}
});

// To Top Button
$('#btn-top').click(function (e) {
	e.preventDefault();
	$('html, body').animate({scrollTop: 0}, 'slow');
});

// On focus-blur input
$('.form-control input:not([type=file])').focus(function () {
	let theParent = $(this).parent();
	if ($(this).val() === '') {
		$('label', theParent).addClass('up');
		theParent.addClass('up');
	}
});

$('.form-control input:not([type=file])').blur(function () {
	let theParent = $(this).parent();
	if ($(this).val() === '') {
		$('label', theParent).removeClass('up');
		theParent.removeClass('up');
	}
});

// First Section Input Validation
let firstSectionInputs = [$('input[name=userName]'), $('input[name=userCuit]'), $('input[name=userEmail]')];
let firstSectionDataInputs = [$('[data-id=userName]'), $('[data-id=userCuit]'), $('[data-id=userEmail]')];

firstSectionInputs.forEach(input => {
	input.blur(() => {
		if ($(input).val() === '') {
			$(input).addClass('error');
		} else {
			$(input).removeClass('error');
		}
	});
});

$('#first-sect-btn').click(() => {
	firstSectionInputs.forEach(input => {
		if (input.val().trim() === '') {
			$(input).addClass('error');
		}
	});

	let userNameValue = $('input[name=userName]').val().trim();
	let userCuitValue = $('input[name=userCuit]').val().trim();
	let userEmailValue = $('input[name=userEmail]').val().trim();

	if (userNameValue !== '' && userCuitValue !== '' && userEmailValue !== '') {
		for (let [key, dataInput] of firstSectionDataInputs.entries()) {
			dataInput.text(firstSectionInputs[key].val());
		}
		$('#first-sect .sect-main-data').fadeOut(350);
		$('#first-sect .sect-resume-data').fadeIn(350);
		$('#second-sect').fadeIn(550);

		if (window.innerWidth >= 990) {
			$('#first-sect').addClass('col-md-2');
			$('#first-sect').addClass('shadow');
			$('#first-sect').css({
				'position': 'relative',
				'z-index': 10,
				'background': '#fff'
			});
			$('.main-container .row').addClass('flex');
		}
	}
});

$('#btn-edit-data-1st-sect').click(e => {
	e.preventDefault();
	$('#first-sect .sect-main-data').fadeIn(350);
	$('#first-sect .sect-resume-data').fadeOut(350);
	if (window.innerWidth >= 990) {
		$('#first-sect').removeClass('col-md-2');
		$('#first-sect .sect-main-data').show();
		$('#first-sect .sect-resume-data, #second-sect, #third-sect').hide();
	}
});

// Second Section Input Validation
let secondSectionInputs = [$('input[name=totalActive]'), $('input[name=totalPasive]'), $('input[name=totalAnualBilling]'), $('input[name=incomeTaxPaid]'), $('input[name=lastExerciseResult]')];
let secondSectionDataInputs = [$('[data-id=totalActive]'), $('[data-id=totalPasive]'), $('[data-id=totalAnualBilling]'), $('[data-id=incomeTaxPaid]'), $('[data-id=lastExerciseResult]')];

secondSectionInputs.forEach(input => {
	input.blur(() => {
		if ($(input).val() === '') {
			$(input).addClass('error');
		} else {
			$(input).removeClass('error');
		}
	});
});

$('#second-sect-btn').click(() => {
	secondSectionInputs.forEach(input => {
		if (input.val().trim() === '') {
			$(input).addClass('error');
		}
	});

	let totalActiveValue = $('input[name=totalActive]').val().trim();
	let totalPasiveValue = $('input[name=totalPasive]').val().trim();
	let totalAnualBillingValue = $('input[name=totalAnualBilling]').val().trim();
	let incomeTaxPaidValue = $('input[name=incomeTaxPaid]').val().trim();
	let lastExerciseResultValue = $('input[name=lastExerciseResult]').val().trim();

	if (
		totalActiveValue !== '' &&
		totalPasiveValue !== '' &&
		totalAnualBillingValue !== '' &&
		incomeTaxPaidValue !== '' &&
		lastExerciseResultValue !== ''
	) {
		for (let [key, dataInput] of secondSectionDataInputs.entries()) {
			dataInput.text(`$ ${secondSectionInputs[key].val()}`);
		}
		$('#second-sect .sect-main-data').fadeOut(350);
		$('#second-sect .sect-resume-data').fadeIn(350);
		$('#third-sect').slideDown(550);

		if (window.innerWidth >= 990) {
			$('#second-sect').addClass('col-md-2');
			$('#second-sect').addClass('shadow');
			$('#second-sect').css({
				'position': 'relative',
				'z-index': 5,
				'background': '#fff'
			});
		}
	}
});

$('#btn-edit-data-2nd-sect').click(e => {
	e.preventDefault();
	$('#second-sect .sect-main-data').fadeIn(350);
	$('#second-sect .sect-resume-data').fadeOut(350);
	if (window.innerWidth >= 990) {
		$('#second-sect').removeClass('col-md-2');
		$('#second-sect .sect-main-data').show();
		$('#second-sect .sect-resume-data, #third-sect').hide();
	}
});