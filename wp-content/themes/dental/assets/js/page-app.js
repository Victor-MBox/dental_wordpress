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

  // Функция назначения обработчика отправки формы
  function bindFormSubmit() {
    $(document).off("submit", ".form-portfolio"); // Удаление предыдущих обработчиков отправки формы
    $(document).on("submit", ".form-portfolio", function (e) {
      e.preventDefault();

      var isFormValid = false;
      var form = $(this);

      $("#form-2").validate({
        rules: {
          name: "required",
          phone: "required",
          email: {
            email: true,
          },
          checkbox: {
            required: true,
          },
        },
        messages: {
          name: "Введите имя",
          phone: "Введите телефон",
          email: {
            email: "Неправильно введен email",
          },
          checkbox: "Пожалуйста, отметьте этот чекбокс",
        },
        submitHandler: function (form) {
          if ($("#checkbox-2").is(":checked")) {
            isFormValid = true;
          } else {
            alert(
              "Пожалуйста, дайте согласие на обработку персональных данных"
            );
            isFormValid = false;
          }
        },
      });

      form.submit(function (e) {
        e.preventDefault();

        if (!form.valid() || !isFormValid) {
          return;
        }

        var submitButton = form.find(".btn_submit");
        var originalButtonText = submitButton.val();

        submitButton.val("Отправка...").prop("disabled", true);

        $.ajax({
          type: "POST",
          url: "https://dental.cg-test.ru/wp-content/themes/dental/assets/mailer/smart.php",
          data: form.serialize(),
        }).done(function () {
          form.find("input").val("");
          $("#mainModal").fadeOut();
          $(".modal__overlay, #thanksModal").fadeIn();
          form[0].reset();
          submitButton.val(originalButtonText).prop("disabled", false);
        });

        return false;
      });
    });
  }

  /* Маска номера телефона */
  $("input[name=phone]").mask("+7 (999) 999-99-99");
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
  }

  // Инициализация слайдеров после каждого AJAX-запроса
  $(document).ajaxComplete(function () {
    initializeSliders();
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

  initializeSliders(); // Инициализация слайдеров при загрузке страницы
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

/* *************************************************
Карусель ОБОРУДОВАНИЕ на страницце О КОМПАНИИ */
$(document).ready(function () {
  let slickCarouselEquipment = $("#slickCarouselEquipment");

  if (slickCarouselEquipment.length) {
    slickCarouselEquipment.slick({
      dots: false,
      arrows: false,
      infinite: false,
      speed: 300,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1201,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 769,
          settings: {
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 481,
          settings: {
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  // Скрытие изображения загрузки
  $("#loader").fadeOut(300);

  /* Навигация слайдера */
  $("#slickCarouselEquipmentPrev").on("click", function () {
    slickCarouselEquipment.slick("slickPrev");
  });

  $("#slickCarouselEquipmentNext").on("click", function () {
    slickCarouselEquipment.slick("slickNext");
  });
});

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

