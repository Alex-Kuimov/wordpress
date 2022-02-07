jQuery(document).ready(function($) {

	$('body').on('click', '.js-ajax', function () {

		let formData = new FormData();
		formData.append('action', 'ajax_callback');
		formData.append('nonce', param.nonce);

		$.ajax({
			url: param.ajaxUrl,
			type: 'POST',
			data: formData,
			cache: false,
			dataType: 'json',
			processData: false,
			contentType: false,
			success: function (res) {
				console.log(res);
				$('.js-ajax-wrap').html(res.data);
			}
		});

		return false;
	});

})
