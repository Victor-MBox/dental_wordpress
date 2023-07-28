//Отправка формы
$(document).ready(function () {
	var isFormValid = false // Флаг для отслеживания состояния валидации

	$('#form-1').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-2').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-2').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-3').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-3').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-modal').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkboxModal').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-01').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-01').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-02').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-02').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-03').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-03').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-04').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-04').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-05').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-05').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-06').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-06').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-07').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-07').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-08').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-08').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-09').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-09').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	$('#form-010').validate({
		rules: {
			name: 'required',
			phone: 'required',
			email: {
				email: true,
			},
			checkbox: {
				required: true,
			},
		},
		messages: {
			name: 'Введите имя',
			phone: 'Введите телефон',
			email: {
				email: 'Неправильно введен email',
			},
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-010').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})

	if (
		$(
			'#form-1, #form-2, #form-3, #form-01, #form-02, #form-03, #form-04, #form-05, #form-06, #form-07, #form-08, #form-09, #form-010, #form-modal'
		).length
	) {
		$(
			'#form-1, #form-2, #form-3, #form-01, #form-02, #form-03, #form-04, #form-05, #form-06, #form-07, #form-08, #form-09, #form-010, #form-modal'
		).submit(function (e) {
			e.preventDefault()

			var form = $(this)

			if (!form.valid() || !isFormValid) {
				return
			}

			var submitButton = form.find('.btn_submit')
			var originalButtonText = submitButton.val()

			submitButton.val('Отправка...').prop('disabled', true)

			$.ajax({
				type: 'POST',
				url: 'https://zubkivsem.ru/wp-content/themes/dental/assets/mailer/smart.php',
				data: form.serialize(),
			}).done(function () {
				form.find('input').val('')
				$('#mainModal').fadeOut()
				$('.modal__overlay, #thanksModal').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
})

$(document).ready(function () {
	var formFooter = $('#form-footer') // Сохраняем ссылку на форму в переменную

	formFooter.validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
		},
		messages: {
			email: {
				required: 'Введите email',
				email: 'Неправильно введен email',
			},
		},
		submitHandler: function (form) {
			var $submitButton = $(form).find('input[type="submit"]')
			var originalButtonText = $submitButton.val() // Сохраняем оригинальный текст кнопки

			$submitButton.val('Отправка...')

			$.ajax({
				type: 'POST',
				url: 'https://zubkivsem.ru/wp-content/themes/dental/assets/mailer/smart.php',
				data: $(form).serialize(),
				success: function (response) {
					$submitButton.val(originalButtonText) // Восстанавливаем оригинальный текст кнопки
					$(form)[0].reset() // Очищаем поля формы
					$('.modal__overlay, #thanksModalEmail').fadeIn()
				},
				error: function () {
					$submitButton.val(originalButtonText) // Восстанавливаем оригинальный текст кнопки
					// Обработка ошибки отправки формы
				},
			})
		},
	})
})

// Маска номера телефона
$('input[name=phone]').mask('+7 (999) 999-99-99')

//reCAPTCHA
function onSubmit(token) {
	var formIds = ['form-1', 'form-2', 'form-3', 'form-modal']
	formIds.forEach(function (formId) {
		document.getElementById(formId).submit()
	})
}
