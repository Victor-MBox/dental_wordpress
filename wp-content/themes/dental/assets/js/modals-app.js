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

//МОД ОКНА ДОКТОРА
//Borisenko ЗАПИСЬ
$(document).on('click', '[data-modal=borisenkoModal]', function () {
	$('.modal__overlay, #borisenkoModal').fadeIn()
})

$(document).on(
	'click',
	'.modal__close, .thanks-modal__btn, .modal__overlay-item',
	function () {
		$(
			'.modal__overlay, #borisenkoModal, #thanksModalBorisenko').fadeOut()
	}
)
//ВОПРОС









//Видео в модальном окне
$('[data-modal=videoModal]').on('click', function () {
	$('.modal__overlay, #videoModal').fadeIn()
})

$('.modal__close, .modal__overlay-item').on('click', function () {
	$('.modal__overlay, #videoModal').fadeOut()
	var videoPlayer = $('#videoModal').find('iframe').get(0)
	var videoSrc = videoPlayer.src
	videoPlayer.src = '' // Остановка воспроизведения
	videoPlayer.src = videoSrc // Восстановление исходного источника видео
})
