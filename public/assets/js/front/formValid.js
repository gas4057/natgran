$(function() {
	// Валидация форм
	$("#phone").mask("+375 (00) 000-00-00");
	$("#callback--form").validate({
		errorClass: "invalid",
		validClass: "success",
		rules: {
			email: {
				email: true,
				required: false,
			},
			phone: {
				minlength: 18,
				required: true,
			},
			name: {
				required: true,
				minlength: 2,
			},
		},
		messages: {
			phone: {
				required: "Поле обязательно для заполнения",
				minlength: "Минимальная длина пароля - 6 символа",
			},
			email: {
				required: "Поле обязательно для заполнения",
				email: "Введите корректный email",
			},
			name: {
				required: "Поле обязательно для заполнения",
				minlength: "Слишком короткое имя",
			},
		},
	});
	$("#order--form").validate({
		errorClass: "invalid",
		validClass: "success",
		rules: {
			terms: {
				required: true,
			},
			email: {
				email: true,
				required: false,
			},
			phone: {
				minlength: 18,
				required: true,
			},
			name: {
				required: true,
				minlength: 2,
			},
		},
		messages: {
			phone: {
				required: "Поле обязательно для заполнения",
				minlength: "Минимальная длина пароля - 6 символа",
			},
			email: {
				required: "Поле обязательно для заполнения",
				email: "Введите корректный email",
			},
			name: {
				required: "Поле обязательно для заполнения",
				minlength: "Слишком короткое имя",
			},
			terms: {
				required: "Поле обязательно для заполения"
			}
		},
	});
	$("#popup-qiuck-order-form").validate({
		errorClass: "invalid",
		validClass: "success",
		rules: {
			terms: {
				required: true,
			},
			email: {
				email: true,
				required: false,
			},
			phone: {
				minlength: 18,
				required: true,
			},
			name: {
				required: true,
				minlength: 2,
			},
		},
		messages: {
			phone: {
				required: "Поле обязательно для заполнения",
				minlength: "Минимальная длина пароля - 6 символа",
			},
			email: {
				required: "Поле обязательно для заполнения",
				email: "Введите корректный email",
			},
			name: {
				required: "Поле обязательно для заполнения",
				minlength: "Слишком короткое имя",
			},
			terms: {
				required: "Поле обязательно для заполения"
			}
		},
	});
});