/* ===================================================
Модальные окна */
$(document).on('click', '[data-modal=mainModal]', function () {
	$('.modal__overlay, #mainModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$('.modal__overlay, #mainModal, #thanksModal, #thanksModalEmail').fadeOut()
	}
)

//! МОД ОКНА ДОКТОРА
//* Borisenko ЗАПИСЬ
$(document).on('click', '[data-modal=borisenkoModal]', function () {
		$('.modal__overlay, #borisenkoModal').fadeIn()
		
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #borisenkoModal, #thanksModalBorisenko, #thanksModalBorisenkoQuest'
		).fadeOut()
	}
)

//* Zejnalov ЗАПИСЬ
$(document).on('click', '[data-modal=zejnalovModal]', function () {
		$('.modal__overlay, #zejnalovModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #zejnalovModal, #thanksModalZejnalov, #thanksModalZejnalovQuest'
		).fadeOut()
	}
)

//* Sarybaev ЗАПИСЬ
$(document).on('click', '[data-modal=sarybaevModal]', function () {
		$('.modal__overlay, #sarybaevModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #sarybaevModal, #thanksModalSarybaev, #thanksModalSarybaevQuest'
		).fadeOut()
	}
)

//* Antonovskij ЗАПИСЬ
$(document).on('click', '[data-modal=antonovskijModal]', function () {
		$('.modal__overlay, #antonovskijModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #antonovskijModal, #thanksModalAntonovskij, #thanksModalAntonovskijQuest'
		).fadeOut()
	}
)

//* Igonin ЗАПИСЬ
$(document).on('click', '[data-modal=igoninModal]', function () {
		$('.modal__overlay, #igoninModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #igoninModal, #thanksModalIgonin, #thanksModalIgoninQuest'
		).fadeOut()
	}
)

//* Handogin ЗАПИСЬ
$(document).on('click', '[data-modal=handoginModal]', function () {
		$('.modal__overlay, #handoginModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #handoginModal, #thanksModalHandogin, #thanksModalHandoginQuest'
		).fadeOut()
	}
)

//* Zhurov ЗАПИСЬ
$(document).on('click', '[data-modal=zhurovModal]', function () {
		$('.modal__overlay, #zhurovModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #zhurovModal, #thanksModalZhurov, #thanksModalZhurovQuest'
		).fadeOut()
	}
)

//* Dzhahbarova ЗАПИСЬ
$(document).on('click', '[data-modal=dzhahbarovaModal]', function () {
		$('.modal__overlay, #dzhahbarovaModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #dzhahbarovaModal, #thanksModalDzhahbarova, #thanksModalDzhahbarovaQuest'
		).fadeOut()
	}
)

//* Bajkulova ЗАПИСЬ
$(document).on('click', '[data-modal=bajkulovaModal]', function () {
		$('.modal__overlay, #bajkulovaModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #bajkulovaModal, #thanksModalBajkulova, #thanksModalBajkulovaQuest'
		).fadeOut()
	}
)

//* Bachulis ЗАПИСЬ
$(document).on('click', '[data-modal=bachulisModal]', function () {
		$('.modal__overlay, #bachulisModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #bachulisModal, #thanksModalBachulis, #thanksModalBachulisQuest'
		).fadeOut()
	}
)

//! МОД окна АКЦИИ
//* АКЦИЯ 1
$(document).on('click', '[data-modal=stock1Modal]', function () {
	$('.modal__overlay, #stock1Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock1Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 2
$(document).on('click', '[data-modal=stock2Modal]', function () {
	$('.modal__overlay, #stock2Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock2Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 3
$(document).on('click', '[data-modal=stock3Modal]', function () {
	$('.modal__overlay, #stock3Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock3Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 4
$(document).on('click', '[data-modal=stock4Modal]', function () {
	$('.modal__overlay, #stock4Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock4Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 5
$(document).on('click', '[data-modal=stock5Modal]', function () {
	$('.modal__overlay, #stock5Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock5Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 6
$(document).on('click', '[data-modal=stock6Modal]', function () {
	$('.modal__overlay, #stock6Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock6Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 7
$(document).on('click', '[data-modal=stock7Modal]', function () {
	$('.modal__overlay, #stock7Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock7Modal, #thanksModalStock'
		).fadeOut()
	}
)

//* АКЦИЯ 8
$(document).on('click', '[data-modal=stock8Modal]', function () {
	$('.modal__overlay, #stock8Modal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #stock8Modal, #thanksModalStock'
		).fadeOut()
	}
)










//Видео в модальном окне
$('[data-modal=videoModal]').on('click', function () {
	$('.modal__overlay, #videoModal').fadeIn()
	// При клике на кнопку, делаем запрос на YouTube и подставляем src для iframe
	$('#youtube-iframe').attr('src', 'https://www.youtube.com/embed/Gw2oJYOdcko')
})

$('.modal__close, .modal__overlay-item').on('click', function () {
	$('.modal__overlay, #videoModal').fadeOut()
	var videoPlayer = $('#videoModal').find('iframe').get(0)
	var videoSrc = videoPlayer.src
	videoPlayer.src = '' // Остановка воспроизведения
	videoPlayer.src = videoSrc // Восстановление исходного источника видео
})
