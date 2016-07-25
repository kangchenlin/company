$(function() {
	 var memAccount;
	 $('#check').click(function () {
		memAccount = $('.form-control').val();

		$.ajax({
			url: '/chek.php',
			type: 'post',
			dataType: 'html',
			data: {
				memAccount: memAccountString
			},
		})
		.done(function (data) {
			console.log(data);
			
			if (data == 'valid') {
				$('check').removeClass().addClass('btn btn-success').text('可使用');
			} else {
				$('check').removeClass().addClass('btn btn-danger').text('重複');
			}
		})
		.fail(function (data) {
			console.log("error");
		});
		
	});
});