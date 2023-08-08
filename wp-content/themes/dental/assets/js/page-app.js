// Страница Услуги *****************************************************************

/* ***************************************************
АККОРДЕОН на странице УСЛУГИ*/
//==========================================
$(document).ready(function () {
  const pageTitles = document.querySelectorAll(".accordion-page__tab");
  const pageContents = document.querySelectorAll(".accordion-page__content");

  if (pageTitles.length && pageContents.length) {
    pageTitles.forEach((item) =>
      item.addEventListener("click", () => {
        const activeContent = document.querySelector("#" + item.dataset.tab);

        if (activeContent.classList.contains("active")) {
          activeContent.classList.remove("active");
          item.classList.remove("active");
          activeContent.style.maxHeight = 0;
        } else {
          pageContents.forEach((element) => {
            element.classList.remove("active");
            element.style.maxHeight = 0;
          });

          pageTitles.forEach((element) => element.classList.remove("active"));

          item.classList.add("active");
          activeContent.classList.add("active");
          activeContent.style.maxHeight = activeContent.scrollHeight + "0px";
        }
      })
    );
  }
});

/* ТАБ В АККОРДИОНЕ на странице УСЛУГИ - AJAX*/
/* ************************************************* */

$(document).ready(function () {
  var slidersInitialized = false; // Переменная для отслеживания инициализации слайдеров
  var activeButton = null; // Переменная для хранения ссылки на текущую активную кнопку

  // Функция загрузки контента по AJAX-запросу
  function loadContent(info) {
    var contentPage = $("#content-page");

    if (contentPage.length) {
      contentPage.load(info, "", function () {
        contentPage.show("fast", function () {
          hideLoader();
          initializeSliders();
          initializeSliders2();
          initializeBeforeAfterSliders();
          setupAccordion(); // Добавление инициализации аккордеона
          bindFormSubmit(); // Назначение обработчика отправки формы
        });
      });
    }
  }

  // Функция скрытия загрузчика
  function hideLoader() {
    $("#loader-page").fadeOut("normal");
  }

  /* Маска номера телефона */
  $("input[name=phone]").mask("+7 (999) 999-99-99");
  
  // Функция назначения обработчика отправки формы
  function bindFormSubmit() {
    $(document).off('submit', '.form-portfolio') // Удаление предыдущих обработчиков отправки формы
    $(document).on("submit", ".form-portfolio",  function (e) {
			e.preventDefault()

			var isFormValid = false
			var form = $(this)

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

			form.submit(function (e) {
				e.preventDefault()

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

			//! ФОРМЫ С вопрос ДОКТОРАМ

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
		});
  }

  

  function initializeSliders2() {
    var slickCarouselServise = $("#slickCarouselServise");
    if (
      slickCarouselServise.length &&
      !slickCarouselServise.hasClass("slick-initialized")
    ) {
      slickCarouselServise.slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }
  }

  // Функция инициализации слайдеров
  function initializeSliders() {
    var beforeAfterSlider = $("#beforeAfterSlider");
    if (
      beforeAfterSlider.length &&
      !beforeAfterSlider.hasClass("slick-initialized")
    ) {
      beforeAfterSlider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 500,
        fade: true,
        swipe: false,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 769,
            settings: {
              dots: true,
            },
          },
        ],
      });
      $("#introSliderPrev").on("click", function () {
        beforeAfterSlider.slick("slickPrev");
      });

      $("#introSliderNext").on("click", function () {
        beforeAfterSlider.slick("slickNext");
      });
    }
  }

  // Функция инициализации слайдеров Before-After
  //1
  function initializeBeforeAfterSliders() {
    var gallery = document.querySelector(".before-after__gallery");
    var galleryResize = document.querySelector(".before-after__gallery-after");
    var before = document.querySelector("#before");
    var after = document.querySelector("#after");

    if (gallery && galleryResize && before && after) {
      gallery.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize.classList.remove("tr");
        galleryResize.style.width = x + "px";
      });

      gallery.addEventListener("mouseleave", function () {
        galleryResize.style.width = "50%";
        galleryResize.classList.add("tr");
      });

      before.onclick = function () {
        galleryResize.classList.add("tr");
        galleryResize.style.width = "50px";
      };

      after.onclick = function () {
        galleryResize.classList.add("tr");
        galleryResize.style.width = "90%";
      };
    }

  //2
    var gallery2 = document.querySelector(".before-after2__gallery");
    var galleryResize2 = document.querySelector(
      ".before-after2__gallery-after"
    );
    var before2 = document.querySelector("#before2");
    var after2 = document.querySelector("#after2");

    if (gallery2 && galleryResize2 && before2 && after2) {
      gallery2.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize2.classList.remove("tr");
        galleryResize2.style.width = x + "px";
      });

      gallery2.addEventListener("mouseleave", function () {
        galleryResize2.style.width = "50%";
        galleryResize2.classList.add("tr");
      });

      before2.onclick = function () {
        galleryResize2.classList.add("tr");
        galleryResize2.style.width = "50px";
      };

      after2.onclick = function () {
        galleryResize2.classList.add("tr");
        galleryResize2.style.width = "90%";
      };
    }

  //3
    var gallery3 = document.querySelector(".before-after3__gallery");
    var galleryResize3 = document.querySelector(
      ".before-after3__gallery-after"
    );
    var before3 = document.querySelector("#before3");
    var after3 = document.querySelector("#after3");

    if (gallery3 && galleryResize3 && before3 && after3) {
      gallery3.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize3.classList.remove("tr");
        galleryResize3.style.width = x + "px";
      });

      gallery3.addEventListener("mouseleave", function () {
        galleryResize3.style.width = "50%";
        galleryResize3.classList.add("tr");
      });

      before3.onclick = function () {
        galleryResize3.classList.add("tr");
        galleryResize3.style.width = "50px";
      };

      after3.onclick = function () {
        galleryResize3.classList.add("tr");
        galleryResize3.style.width = "90%";
      };
    }

  //4
    var gallery4 = document.querySelector(".before-after4__gallery");
    var galleryResize4 = document.querySelector(
      ".before-after4__gallery-after"
    );
    var before4 = document.querySelector("#before4");
    var after4 = document.querySelector("#after4");

    if (gallery4 && galleryResize4 && before4 && after4) {
      gallery4.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize4.classList.remove("tr");
        galleryResize4.style.width = x + "px";
      });

      gallery4.addEventListener("mouseleave", function () {
        galleryResize4.style.width = "50%";
        galleryResize4.classList.add("tr");
      });

      before4.onclick = function () {
        galleryResize4.classList.add("tr");
        galleryResize4.style.width = "50px";
      };

      after4.onclick = function () {
        galleryResize4.classList.add("tr");
        galleryResize4.style.width = "90%";
      };
    }

  //5
    var gallery5 = document.querySelector(".before-after5__gallery");
    var galleryResize5 = document.querySelector(
      ".before-after5__gallery-after"
    );
    var before5 = document.querySelector("#before5");
    var after5 = document.querySelector("#after5");

    if (gallery5 && galleryResize5 && before5 && after5) {
      gallery5.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize5.classList.remove("tr");
        galleryResize5.style.width = x + "px";
      });

      gallery5.addEventListener("mouseleave", function () {
        galleryResize5.style.width = "50%";
        galleryResize5.classList.add("tr");
      });

      before5.onclick = function () {
        galleryResize5.classList.add("tr");
        galleryResize5.style.width = "50px";
      };

      after5.onclick = function () {
        galleryResize5.classList.add("tr");
        galleryResize5.style.width = "90%";
      };
    }

  //6
    var gallery6 = document.querySelector(".before-after6__gallery");
    var galleryResize6 = document.querySelector(
      ".before-after6__gallery-after"
    );
    var before6 = document.querySelector("#before6");
    var after6 = document.querySelector("#after6");

    if (gallery6 && galleryResize6 && before6 && after6) {
      gallery6.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize6.classList.remove("tr");
        galleryResize6.style.width = x + "px";
      });

      gallery6.addEventListener("mouseleave", function () {
        galleryResize6.style.width = "50%";
        galleryResize6.classList.add("tr");
      });

      before6.onclick = function () {
        galleryResize6.classList.add("tr");
        galleryResize6.style.width = "50px";
      };

      after6.onclick = function () {
        galleryResize6.classList.add("tr");
        galleryResize6.style.width = "90%";
      };
    }

  //7
    var gallery7 = document.querySelector(".before-after7__gallery");
    var galleryResize7 = document.querySelector(
      ".before-after7__gallery-after"
    );
    var before7 = document.querySelector("#before7");
    var after7 = document.querySelector("#after7");

    if (gallery7 && galleryResize7 && before7 && after7) {
      gallery7.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize7.classList.remove("tr");
        galleryResize7.style.width = x + "px";
      });

      gallery7.addEventListener("mouseleave", function () {
        galleryResize7.style.width = "50%";
        galleryResize7.classList.add("tr");
      });

      before7.onclick = function () {
        galleryResize7.classList.add("tr");
        galleryResize7.style.width = "50px";
      };

      after7.onclick = function () {
        galleryResize7.classList.add("tr");
        galleryResize7.style.width = "90%";
      };
    }

  //8
    var gallery8 = document.querySelector(".before-after8__gallery");
    var galleryResize8 = document.querySelector(
      ".before-after8__gallery-after"
    );
    var before8 = document.querySelector("#before8");
    var after8 = document.querySelector("#after8");

    if (gallery8 && galleryResize8 && before8 && after8) {
      gallery8.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize8.classList.remove("tr");
        galleryResize8.style.width = x + "px";
      });

      gallery8.addEventListener("mouseleave", function () {
        galleryResize8.style.width = "50%";
        galleryResize8.classList.add("tr");
      });

      before8.onclick = function () {
        galleryResize8.classList.add("tr");
        galleryResize8.style.width = "50px";
      };

      after8.onclick = function () {
        galleryResize8.classList.add("tr");
        galleryResize8.style.width = "90%";
      };
    }

  //9
    var gallery9 = document.querySelector(".before-after9__gallery");
    var galleryResize9 = document.querySelector(
      ".before-after9__gallery-after"
    );
    var before9 = document.querySelector("#before9");
    var after9 = document.querySelector("#after9");

    if (gallery9 && galleryResize9 && before9 && after9) {
      gallery9.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize9.classList.remove("tr");
        galleryResize9.style.width = x + "px";
      });

      gallery9.addEventListener("mouseleave", function () {
        galleryResize9.style.width = "50%";
        galleryResize9.classList.add("tr");
      });

      before9.onclick = function () {
        galleryResize9.classList.add("tr");
        galleryResize9.style.width = "50px";
      };

      after9.onclick = function () {
        galleryResize9.classList.add("tr");
        galleryResize9.style.width = "90%";
      };
    }

  //10
    var gallery10 = document.querySelector(".before-after10__gallery");
    var galleryResize10 = document.querySelector(
      ".before-after10__gallery-after"
    );
    var before10 = document.querySelector("#before10");
    var after10 = document.querySelector("#after10");

    if (gallery10 && galleryResize10 && before10 && after10) {
      gallery10.addEventListener("mousemove", function (event) {
        var x = event.offsetX;
        galleryResize10.classList.remove("tr");
        galleryResize10.style.width = x + "px";
      });

      gallery10.addEventListener("mouseleave", function () {
        galleryResize10.style.width = "50%";
        galleryResize10.classList.add("tr");
      });

      before10.onclick = function () {
        galleryResize10.classList.add("tr");
        galleryResize10.style.width = "50px";
      };

      after10.onclick = function () {
        galleryResize10.classList.add("tr");
        galleryResize10.style.width = "90%";
      };
    }
  }

  // Обработчик клика на кнопку подробнее
  $(".link-page-2").click(function () {
    var info = $(this).attr("href") + " #content-page";
    var sect = $(this).attr("data-sect");
    console.log("sect=" + sect);
    var hl = $(this).attr("data-hl");
    console.log("hl=" + hl);
    document.getElementById("vr" + sect).click();
    document.getElementById("vrb" + sect + "_" + hl).click();
    document.getElementById("content-page").scrollIntoView();
    $("#content-page").hide("fast", function () {
      loadContent(info);
    });
    $("#loader-page").fadeIn("normal");

    return false;
  });

  // Обработчик клика на кнопку
  $(".link-page").click(function () {
    var info = $(this).attr("href") + " #content-page";
    $("#content-page").hide("fast", function () {
      loadContent(info);
    });

    $("#loader-page").fadeIn("normal");

    // Проверяем, не является ли текущая кнопка уже активной

    if (!$(this).hasClass("active-tab")) {
      // Удаление класса "active" у предыдущей активной кнопки
      $(".link-page.active-tab").removeClass("active-tab");

      // Добавление класса "active" к текущей кнопке
      $(this).addClass("active-tab");
      activeButton = $(this);
    }

    return false;
  });

   // Обработчик клика на кнопку ПОРТФОЛИО
   $(".btn-wrapper, .btn_lilac").click(function () {
    var info = $(this).attr("href") + " #content-page";
    $("#content-page").hide("fast", function () {
      loadContent(info);
    });

    $("#loader-page").fadeIn("normal");

    // Проверяем, не является ли текущая кнопка уже активной

    if (!$(this).hasClass("btn-wrapper_active")) {
      // Удаление класса "active" у предыдущей активной кнопки
      $(".btn-wrapper.btn-wrapper_active").removeClass("btn-wrapper_active");

      // Добавление класса "active" к текущей кнопке
      $(this).addClass("btn-wrapper_active");
      activeButton = $(this);
    }

    return false;
  });


  initializeSliders();
});

//Страница - О КОМПАНИИ **************************************************

//Слайдер О лаборатории
$(document).ready(function () {
  let aboutLaboratorySlider = $("#aboutLaboratorySlider");

  if (aboutLaboratorySlider.length) {
    aboutLaboratorySlider.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      speed: 500,
      fade: true,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            dots: true,
          },
        },
      ],
      appendDots: ".slider-counter",
      customPaging: function (slider, i) {
        return "<button>" + (i + 1) + "</button>";
      },
    });
  }

  // Скрытие изображения загрузки
  $("#loader").fadeOut(300);

  /* Навигация слайдера */
  $("#aboutLaboratorySliderPrev").on("click", function () {
    aboutLaboratorySlider.slick("slickPrev");
  });

  $("#aboutLaboratorySliderNext").on("click", function () {
    aboutLaboratorySlider.slick("slickNext");
  });

  /* Счетчик слайдера */
  var totalSlides = aboutLaboratorySlider.slick("getSlick").slideCount;
  $(".total-slides").text(totalSlides);

  aboutLaboratorySlider.on(
    "afterChange",
    function (event, slick, currentSlide) {
      $(".current-slide").text(currentSlide + 1);
    }
  );
});

// /* *************************************************
// Карусель ОБОРУДОВАНИЕ на страницце О КОМПАНИИ */
// $(document).ready(function () {
//   let slickCarouselEquipment = $("#slickCarouselEquipment");

//   if (slickCarouselEquipment.length) {
//     slickCarouselEquipment.slick({
//       dots: false,
//       arrows: false,
//       infinite: false,
//       speed: 300,
//       infinite: true,
//       autoplay: true,
//       autoplaySpeed: 5000,
//       slidesToShow: 4,
//       slidesToScroll: 1,
//       responsive: [
//         {
//           breakpoint: 1201,
//           settings: {
//             slidesToShow: 3,
//             slidesToScroll: 1,
//           },
//         },
//         {
//           breakpoint: 1025,
//           settings: {
//             slidesToShow: 2,
//             slidesToScroll: 1,
//           },
//         },
//         {
//           breakpoint: 769,
//           settings: {
//             dots: true,
//             slidesToShow: 2,
//             slidesToScroll: 1,
//           },
//         },
//         {
//           breakpoint: 481,
//           settings: {
//             dots: true,
//             slidesToShow: 1,
//             slidesToScroll: 1,
//           },
//         },
//       ],
//     });
//   }

//   // Скрытие изображения загрузки
//   $("#loader").fadeOut(300);

//   /* Навигация слайдера */
//   $("#slickCarouselEquipmentPrev").on("click", function () {
//     slickCarouselEquipment.slick("slickPrev");
//   });

//   $("#slickCarouselEquipmentNext").on("click", function () {
//     slickCarouselEquipment.slick("slickNext");
//   });
// });

//==========================================
//АККОРДИН В АККОРДИОНЕ НА СТРАНИЦЕ -  FAQ
//==========================================

$(document).ready(function () {
  const faqTitles = document.querySelectorAll(".faq__tab");
  const faqContents = document.querySelectorAll(".faq__content");

  if (faqTitles.length && faqContents.length) {
    // Добавляем класс "active" к первому табу и его соответствующему контенту
    faqTitles[0].classList.add("active");
    faqContents[0].classList.add("active");
    faqContents[0].style.maxHeight = faqContents[0].scrollHeight + "0px";

    faqTitles.forEach((item) =>
      item.addEventListener("click", () => {
        const activeContent = document.querySelector("#" + item.dataset.tab);

        if (activeContent.classList.contains("active")) {
          activeContent.classList.remove("active");
          item.classList.remove("active");
          activeContent.style.maxHeight = 0;
        } else {
          faqContents.forEach((element) => {
            element.classList.remove("active");
            element.style.maxHeight = 0;
          });

          faqTitles.forEach((element) => element.classList.remove("active"));

          item.classList.add("active");
          activeContent.classList.add("active");
          activeContent.style.maxHeight = activeContent.scrollHeight + "0px";
        }
      })
    );
  }
});

//Страница ДОКТОРА. Кнопка "ЗАДАТЬ ВОПРОС"
function setupAccordion() {
  var accordionItem = $(".btn-accordion");
  var header = accordionItem.find(".btn-accordion__header");
  var content = accordionItem.find(".btn-accordion__content");

  header.on("click", function () {
    var currentContent = $(this).next(".btn-accordion__content");
    // Проверяем, активна ли текущая вкладка
    if (currentContent.is(":visible")) {
      // Если активна, закрываем ее
      currentContent.slideUp();
    } else {
      // Если неактивна, закрываем предыдущую активную вкладку
      content.slideUp();
      // Затем открываем текущую вкладку
      currentContent.slideDown();
    }
  });
}

// Вызов функции для настройки аккордеона при загрузке страницы
$(document).ready(function () {
  setupAccordion();
});

/* *************************************************
Карусель с докторами на странице УСЛУГИ*/

$('#slickCarouselServise').slick({
	dots: true,
	arrows: false,
	infinite: false,
	speed: 300,
	infinite: true,
	autoplay: true,
	autoplaySpeed: 5000,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1025,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			},
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
			},
		},
		{
			breakpoint: 481,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
			},
		},
	],
})
/* Навигация слайдера */
$('#slickCarouselServisePrev').on('click', function () {
	$('#slickCarouselServise').slick('slickPrev')
})

$('#slickCarouselServiseNext').on('click', function () {
	$('#slickCarouselServise').slick('slickNext')
})


//ТАБ НА СТР ГАЛЕРЕЯ
function openTab(evt, tabName) {
  // Получаем все элементы с классом "galerea-tab-content" и скрываем их
  var tabcontent = document.getElementsByClassName("galerea-tab__content");
  for (var i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Удаляем класс "active" у всех кнопок вкладок
  var tablinks = document.getElementsByClassName("galerea-tab__links");
  for (var i = 0; i < tablinks.length; i++) {
      tablinks[i].classList.remove("active");
  }

  // Показываем выбранное содержимое и добавляем класс "active" к кнопке вкладки
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.classList.add("active");
}


//* Кнопка обратной связи МЕСЕНДЖЕРЫ
function toggleFeedbackWidget() {
  const FeedbackWidgetHeader = document.querySelector('.feedback-widget__header');
  const FeedbackWidgetContent = document.querySelector('.feedback-widget__content');

  // Переключение класса 'active' на элементе .feedback-widget
  FeedbackWidgetHeader.classList.toggle('active');

  // Переключение класса 'active' у элемента .feedback-widget__content
  FeedbackWidgetContent.classList.toggle('active');
};

//* Кнопка обратной связи МЕСЕНДЖЕРЫ
function toggleCallbackWidget() {
  const CallbackWidgetHeader = document.querySelector('.callback-widget__header');
  const CallbackWidgetContent = document.querySelector('.callback-widget__content');

  // Переключение класса 'active' на элементе .callback-widget
  CallbackWidgetHeader.classList.toggle('active');

  // Переключение класса 'active' у элемента .callback-widget__content
  CallbackWidgetContent.classList.toggle('active');
};

//* Кнопка ПОИСКА
function toggleSearchWidget() {
	const SearchWidgetBtn = document.querySelector('.search__btn')
	const SearchWidgetContent = document.querySelector('.search__content')

	// Проверка, есть ли у элемента .search__content класс 'active'
	const isActive = SearchWidgetContent.classList.contains('active')

	// Если у .search__content нет класса 'active', добавляем его
	// иначе убираем класс 'active'
	if (!isActive) {
		SearchWidgetContent.classList.add('active')
	} else {
		SearchWidgetContent.classList.remove('active')
	}
}

// Добавляем обработчик события на элемент .search__btn
document
	.querySelector('.search__btn')
	.addEventListener('click', toggleSearchWidget)

// Добавляем обработчик события на элемент .search__btn-close
document
	.querySelector('.search__btn-close')
	.addEventListener('click', toggleSearchWidget)

//* Кнопка ПОИСКА ! MOB
function toggleSearchMobWidget() {
	const SearchMobWidgetBtn = document.querySelector('.search-mob__btn')
	const SearchMobWidgetContent = document.querySelector('.search-mob__content')

	// Проверка, есть ли у элемента .search-mob__content класс 'active'
	const isActive = SearchMobWidgetContent.classList.contains('active')

	// Если у .search-mob__content нет класса 'active', добавляем его
	// иначе убираем класс 'active'
	if (!isActive) {
		SearchMobWidgetContent.classList.add('active')
	} else {
		SearchMobWidgetContent.classList.remove('active')
	}
}

// Добавляем обработчик события на элемент .search-mob__btn
document
	.querySelector('.search-mob__btn')
	.addEventListener('click', toggleSearchMobWidget)

// Добавляем обработчик события на элемент .search-mob__btn-close
document
	.querySelector('.search-mob__btn-close')
	.addEventListener('click', toggleSearchMobWidget)
