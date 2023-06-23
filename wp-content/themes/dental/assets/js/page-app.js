// Страница Услуги *****************************************************************

/* ***************************************************
АККОРДИОН на странице УСЛУГИ*/
//==========================================
$(document).ready(function () {
  const pageTitles = document.querySelectorAll(".accordion-page__tab");
  const pageContents = document.querySelectorAll(".accordion-page__content");

  if (pageTitles.length && pageContents.length) {
    // Добавляем класс "active" к первому табу и его соответствующему контенту
    pageTitles[0].classList.add("active");
    pageContents[0].classList.add("active");
    pageContents[0].style.maxHeight = pageContents[0].scrollHeight + "00px";

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
        });
      });
    }
  }

  // Функция скрытия загрузчика
  function hideLoader() {
    $("#loader-page").fadeOut("normal");
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
