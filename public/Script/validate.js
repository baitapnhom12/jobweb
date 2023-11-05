
$().ready(function () {
	$("#checkform").validate({
		// onfocusout: false,
		// onkeyup: false,
		// onclick: false,
		rules: {
			"name_customer": {
				required: true,

			},
			"email_customer": {
				required: true,
				email: true

			},
			"phone_customer": {
				required: true,
				number: true

			},
			"file_customer": {
				required: true,

			}
		},

		messages: {
			"name_customer": {
				required: "Tên không được trống",
			},
			"email_customer": {
				required: "Email không được trống",
				email: "Sai định dạng email"
			},
			"phone_customer": {
				required: "Số điện thoại không được trống",
				number: "Bắt buộc phải là chữ số"
			},
			"file_customer": {
				required: "Bắt buộc nhập file",

			}

		}
	});
});


$().ready(function () {
	$(".form_employer").validate({
		// onfocusout: false,
		// onkeyup: false,
		// onclick: false,
		rules: {
			"name_job": {
				required: true,

			},
			"quality": {
				required: true,
				number: true

			},
			"price": {
				required: true,


			},

			"date": {
				required: true,

			},
			"desc": {
				required: true,

			},
			"skill": {
				required: true,
			},
		},

		messages: {
			"name_job": {
				required: "Tên không được trống",
			},
			
			"quality": {
				required: "Số lượng không được trống",
				number: "Bắt buộc phải là chữ số"
			},
			"price": {
				required: "Mức lương không được trống",
			},
			"date": {
				required: "Bắt buộc nhập ngày",

			},
			"desc": {
				required: "Bắt buộc nhập mô tả công việc",

			},
			"skill": {
				required: "Bắt buộc nhập yều cầu ứng viên",

			}

		}
	});
});

