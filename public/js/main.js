$(document).ready(function () {

	$('.siteNav__mobBtn').click(function (e) {
		e.preventDefault();
		$('.pageContainer').toggleClass('navOpen');
	});

});
