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

	//! ФОРМЫ С ДОКТОРАМИ

	// * Борисенко ЗАПИСЬ на прием
	$('#form-modalBorisenko').validate({
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
			if ($('#checkboxModalBorisenko').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalBorisenko').length) {
		$('#form-modalBorisenko').submit(function (e) {
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
				$('#borisenkoModal').fadeOut()
				$('.modal__overlay, #thanksModalBorisenko').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Борисенко ВОПРОС
	$('#form-Borisenko').validate({
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
			if ($('#checkbox-Borisenko').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Borisenko').length) {
		$('#form-Borisenko').submit(function (e) {
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
				$('#borisenkoModal').fadeOut()
				$('.modal__overlay, #thanksModalBorisenkoQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Zejnalov ЗАПИСЬ на прием
	$('#form-modalZejnalov').validate({
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
			if ($('#checkboxModalZejnalov').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalZejnalov').length) {
		$('#form-modalZejnalov').submit(function (e) {
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
				$('#zejnalovModal').fadeOut()
				$('.modal__overlay, #thanksModalZejnalov').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Zejnalov ВОПРОС
	$('#form-Zejnalov').validate({
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
			if ($('#checkbox-Zejnalov').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Zejnalov').length) {
		$('#form-Zejnalov').submit(function (e) {
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
				$('#zejnalovModal').fadeOut()
				$('.modal__overlay, #thanksModalZejnalovQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Sarybaev ЗАПИСЬ на прием
	$('#form-modalSarybaev').validate({
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
			if ($('#checkboxModalSarybaev').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalSarybaev').length) {
		$('#form-modalSarybaev').submit(function (e) {
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
				$('#sarybaevModal').fadeOut()
				$('.modal__overlay, #thanksModalSarybaev').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Sarybaev ВОПРОС
	$('#form-Sarybaev').validate({
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
			if ($('#checkbox-Sarybaev').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Sarybaev').length) {
		$('#form-Sarybaev').submit(function (e) {
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
				$('#sarybaevModal').fadeOut()
				$('.modal__overlay, #thanksModalSarybaevQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Antonovskij ЗАПИСЬ на прием
	$('#form-modalAntonovskij').validate({
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
			if ($('#checkboxModalAntonovskij').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalAntonovskij').length) {
		$('#form-modalAntonovskij').submit(function (e) {
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
				$('#antonovskijModal').fadeOut()
				$('.modal__overlay, #thanksModalAntonovskij').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Antonovskij ВОПРОС
	$('#form-Antonovskij').validate({
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
			if ($('#checkbox-Antonovskij').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Antonovskij').length) {
		$('#form-Antonovskij').submit(function (e) {
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
				$('#antonovskijModal').fadeOut()
				$('.modal__overlay, #thanksModalAntonovskijQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Igonin ЗАПИСЬ на прием
	$('#form-modalIgonin').validate({
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
			if ($('#checkboxModalIgonin').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalIgonin').length) {
		$('#form-modalIgonin').submit(function (e) {
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
				$('#igoninModal').fadeOut()
				$('.modal__overlay, #thanksModalIgonin').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Igonin ВОПРОС
	$('#form-Igonin').validate({
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
			if ($('#checkbox-Igonin').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Igonin').length) {
		$('#form-Igonin').submit(function (e) {
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
				$('#igoninModal').fadeOut()
				$('.modal__overlay, #thanksModalIgoninQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Handogin ЗАПИСЬ на прием
	$('#form-modalHandogin').validate({
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
			if ($('#checkboxModalHandogin').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalHandogin').length) {
		$('#form-modalHandogin').submit(function (e) {
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
				$('#handoginModal').fadeOut()
				$('.modal__overlay, #thanksModalHandogin').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Handogin ВОПРОС
	$('#form-Handogin').validate({
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
			if ($('#checkbox-Handogin').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Handogin').length) {
		$('#form-Handogin').submit(function (e) {
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
				$('#handoginModal').fadeOut()
				$('.modal__overlay, #thanksModalHandoginQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Zhurov ЗАПИСЬ на прием
	$('#form-modalZhurov').validate({
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
			if ($('#checkboxModalZhurov').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalZhurov').length) {
		$('#form-modalZhurov').submit(function (e) {
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
				$('#zhurovModal').fadeOut()
				$('.modal__overlay, #thanksModalZhurov').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Zhurov ВОПРОС
	$('#form-Zhurov').validate({
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
			if ($('#checkbox-Zhurov').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Zhurov').length) {
		$('#form-Zhurov').submit(function (e) {
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
				$('#zhurovModal').fadeOut()
				$('.modal__overlay, #thanksModalZhurovQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Dzhahbarova ЗАПИСЬ на прием
	$('#form-modalDzhahbarova').validate({
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
			if ($('#checkboxModalDzhahbarova').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalDzhahbarova').length) {
		$('#form-modalDzhahbarova').submit(function (e) {
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
				$('#dzhahbarovaModal').fadeOut()
				$('.modal__overlay, #thanksModalDzhahbarova').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Dzhahbarova ВОПРОС
	$('#form-Dzhahbarova').validate({
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
			if ($('#checkbox-Dzhahbarova').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Dzhahbarova').length) {
		$('#form-Dzhahbarova').submit(function (e) {
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
				$('#dzhahbarovaModal').fadeOut()
				$('.modal__overlay, #thanksModalDzhahbarovaQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Bajkulova ЗАПИСЬ на прием
	$('#form-modalBajkulova').validate({
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
			if ($('#checkboxModalBajkulova').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalBajkulova').length) {
		$('#form-modalBajkulova').submit(function (e) {
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
				$('#bajkulovaModal').fadeOut()
				$('.modal__overlay, #thanksModalBajkulova').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Bajkulova ВОПРОС
	$('#form-Bajkulova').validate({
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
			if ($('#checkbox-Bajkulova').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Bajkulova').length) {
		$('#form-Bajkulova').submit(function (e) {
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
				$('#bajkulovaModal').fadeOut()
				$('.modal__overlay, #thanksModalBajkulovaQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Bachulis ЗАПИСЬ на прием
	$('#form-modalBachulis').validate({
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
			if ($('#checkboxModalBachulis').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalBachulis').length) {
		$('#form-modalBachulis').submit(function (e) {
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
				$('#bachulisModal').fadeOut()
				$('.modal__overlay, #thanksModalBachulis').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}
	//Bachulis ВОПРОС
	$('#form-Bachulis').validate({
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
			if ($('#checkbox-Bachulis').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-Bachulis').length) {
		$('#form-Bachulis').submit(function (e) {
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
				$('#bachulisModal').fadeOut()
				$('.modal__overlay, #thanksModalBachulisQuest').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 1
	$('#form-modalStock1').validate({
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
			if ($('#checkboxStock1').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock1').length) {
		$('#form-modalStock1').submit(function (e) {
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
				$('#stock1Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 2
	$('#form-modalStock2').validate({
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
			if ($('#checkboxStock2').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock2').length) {
		$('#form-modalStock2').submit(function (e) {
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
				$('#stock2Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 3
	$('#form-modalStock3').validate({
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
			if ($('#checkboxStock3').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock3').length) {
		$('#form-modalStock3').submit(function (e) {
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
				$('#stock3Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 4
	$('#form-modalStock4').validate({
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
			if ($('#checkboxStock4').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock4').length) {
		$('#form-modalStock4').submit(function (e) {
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
				$('#stock4Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 5
	$('#form-modalStock5').validate({
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
			if ($('#checkboxStock5').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock5').length) {
		$('#form-modalStock5').submit(function (e) {
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
				$('#stock5Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 6
	$('#form-modalStock6').validate({
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
			if ($('#checkboxStock6').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock6').length) {
		$('#form-modalStock6').submit(function (e) {
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
				$('#stock6Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 7
	$('#form-modalStock7').validate({
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
			if ($('#checkboxStock7').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock7').length) {
		$('#form-modalStock7').submit(function (e) {
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
				$('#stock7Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Акция 8
	$('#form-modalStock8').validate({
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
			if ($('#checkboxStock8').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-modalStock8').length) {
		$('#form-modalStock8').submit(function (e) {
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
				$('#stock8Modal').fadeOut()
				$('.modal__overlay, #thanksModalStock').fadeIn()
				form[0].reset()
				submitButton.val(originalButtonText).prop('disabled', false)
			})

			return false
		})
	}

	// * Консультация
	if ($('#form-1, #form-2, #form-3, #form-modal').length) {
		$('#form-1, #form-2, #form-3, #form-modal').submit(function (e) {
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

	// * Виджет обратной связи
	$('#form-callback-widget').validate({
		rules: {
			phone: 'required',
			checkbox: {
				required: true,
			},
		},
		messages: {
			phone: 'Введите телефон',
			checkbox: 'Пожалуйста, отметьте этот чекбокс',
		},
		submitHandler: function (form) {
			if ($('#checkbox-callback-widget').is(':checked')) {
				isFormValid = true
			} else {
				alert('Пожалуйста, дайте согласие на обработку персональных данных')
				isFormValid = false
			}
		},
	})
	if ($('#form-callback-widget').length) {
		$('#form-callback-widget').submit(function (e) {
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

				// Убираем класс активности у элементов .callback-widget__header и .callback-widget__content
				$('.callback-widget__header').removeClass('active')
				$('.callback-widget__content').removeClass('active')
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
