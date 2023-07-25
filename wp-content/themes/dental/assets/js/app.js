/* *************************************************
Бугрер меню */
function changeClass(element) {
  element.classList.toggle("burger__active");

  var otherObject = document.getElementById("burgerNav");
  otherObject.classList.toggle("burger-nav__active");

  var otherObject = document.getElementById("mainOverlay");
  otherObject.classList.toggle("main-overlay__active");
}

/* Клик на перекрытие отключает следующие классы */
function removeClasses() {
  var element = document.getElementById("mainOverlay");
  var burger = document.querySelector(".burger");
  var burgerNav = document.getElementById("burgerNav");

  element.classList.remove("main-overlay__active");
  burger.classList.remove("burger__active");
  burgerNav.classList.remove("burger-nav__active");
}

/* ***************************************************
Мобильное меню */
("use strict");
//==========================================

const titles = document.querySelectorAll(".accordion__title");
const contents = document.querySelectorAll(".accordion__content");

titles.forEach((item) =>
  item.addEventListener("click", () => {
    const activeContent = document.querySelector("#" + item.dataset.tab);

    if (activeContent.classList.contains("active")) {
      activeContent.classList.remove("active");
      item.classList.remove("active");
      activeContent.style.maxHeight = 0;
    } else {
      contents.forEach((element) => {
        element.classList.remove("active");
        element.style.maxHeight = 0;
      });

      titles.forEach((element) => element.classList.remove("active"));

      item.classList.add("active");
      activeContent.classList.add("active");
      activeContent.style.maxHeight = "1000px";
    }
  })
);

/* sub */

const subtitles = document.querySelectorAll(".sub-accordion__title");
const subcontents = document.querySelectorAll(".sub-accordion__content");

subtitles.forEach((item) =>
  item.addEventListener("click", () => {
    const activeContent = document.querySelector("#" + item.dataset.tab);
    console.log("clicked");
    if (activeContent.classList.contains("active")) {
      activeContent.classList.remove("active");
      item.classList.remove("active");
      activeContent.style.maxHeight = 0;
    } else {
      subcontents.forEach((element) => {
        element.classList.remove("active");
        element.style.maxHeight = 0;
      });

      subtitles.forEach((element) => element.classList.remove("active"));

      item.classList.add("active");
      activeContent.classList.add("active");
      activeContent.style.maxHeight = "1000px";
    }
  })
);

/* sub-2*/

const sub2titles = document.querySelectorAll(".sub-2-accordion__title");
const sub2contents = document.querySelectorAll(".sub-2-accordion__content");

sub2titles.forEach((item) =>
  item.addEventListener("click", () => {
    const activeContent = document.querySelector("#" + item.dataset.tab);
    console.log("clicked");
    if (activeContent.classList.contains("active")) {
      activeContent.classList.remove("active");
      item.classList.remove("active");
      activeContent.style.maxHeight = 0;
    } else {
      sub2contents.forEach((element) => {
        element.classList.remove("active");
        element.style.maxHeight = 0;
      });

      sub2titles.forEach((element) => element.classList.remove("active"));

      item.classList.add("active");
      activeContent.classList.add("active");
      activeContent.style.maxHeight = activeContent.scrollHeight + "px";
    }
  })
);

/* Отменяем открытие аккордиона при клике на ссылку */
// Получаем все ссылки внутри аккордеона
const links = document.querySelectorAll(".menu a");

// Добавляем обработчик события на каждую ссылку
links.forEach((link) => {
  link.addEventListener("click", (event) => {
    // Останавливаем всплытие события
    event.stopPropagation();
  });
});

// Задаем меню класс активности
const navLinks = document.getElementsByClassName("nav__link");

for (let i = 0; i < navLinks.length; i++) {
  const linkPath = navLinks[i].pathname; // Получаем часть пути ссылки (игнорируем домен и протокол)
  const currentPath = window.location.pathname; // Получаем текущую часть пути (игнорируем домен и протокол)

  if (currentPath.startsWith(linkPath)) {
    navLinks[i].classList.add("nav__active");
  }
}

/* *************************************************
Слайдер Slick на главной станице */
$(document).ready(function () {
  let slickSlider = $("#slickSlider");

  if (slickSlider.length) {
    slickSlider.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      speed: 500,
      fade: true,
      autoplay: true,
      autoplaySpeed: 7000,
    });
  }
  // Скрытие изображения загрузки
  $("#loader").fadeOut(300);
});

/* *************************************************
ТАб УСЛУГИ на главной странице */
$(document).ready(function () {
  const tabsBtn = document.querySelectorAll(".tabs__nav-btn");
  const tabsItems = document.querySelectorAll(".tabs__item");

  if (tabsBtn.length && tabsItems.length) {
    tabsBtn.forEach(onTabHover);

    function onTabHover(item) {
      item.addEventListener("mouseenter", function () {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTab = document.querySelector(tabId);

        if (!currentBtn.classList.contains("active")) {
          tabsBtn.forEach(function (item) {
            item.classList.remove("active");
          });

          tabsItems.forEach(function (item) {
            item.classList.remove("active");
          });

          currentBtn.classList.add("active");
          currentTab.classList.add("active");
        }
      });
    }
  }

  if (document.querySelector(".tabs__nav-btn")) {
    document
      .querySelector(".tabs__nav-btn")
      .dispatchEvent(new Event("mouseenter"));
  }
});

/* ***************************************************
Мобильное АККОРДИОН на главной странице */
//==========================================
$(document).ready(function () {
  const accTitles = document.querySelectorAll(".accordion-home__tab");
  const accContents = document.querySelectorAll(".accordion-home__content");

  if (accTitles.length && accContents.length) {
    // Добавляем класс "active" к первому табу и его соответствующему контенту
    //accTitles[0].classList.add("active");
    // accContents[0].classList.add("active");
    // accContents[0].style.maxHeight = accContents[0].scrollHeight + "0px";

    accTitles.forEach((item) =>
      item.addEventListener("click", () => {
        const activeContent = document.querySelector("#" + item.dataset.tab);

        if (activeContent.classList.contains("active")) {
          activeContent.classList.remove("active");
          item.classList.remove("active");
          activeContent.style.maxHeight = 0;
        } else {
          accContents.forEach((element) => {
            element.classList.remove("active");
            element.style.maxHeight = 0;
          });

          accTitles.forEach((element) => element.classList.remove("active"));

          item.classList.add("active");
          activeContent.classList.add("active");
          activeContent.style.maxHeight = activeContent.scrollHeight + "20px";
        }
        var ct = $("#" + item.dataset.tab);
        console.log(ct.position().top);
        if (
					location.href != 'https://zubkivsem.ru/o-klinike/voprosy/' &&
					location.href != 'https://zubkivsem.ru/galereya/' &&
					location.href != 'https://zubkivsem.ru/vrachi/'
				) {
					$('html, body').animate(
						{ scrollTop: ct.offset().top - ct.position().top - 72 },
						500
					)
				}
      })
    );
  }
});

/* *************************************************
До после - на главной странице 
Slick Slider*/
$(document).ready(function () {
  let beforeAfterSlider = $("#beforeAfterSlider");

  if (beforeAfterSlider.length) {
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
  }

  /* Навигация слайдера */
  $("#introSliderPrev").on("click", function () {
    beforeAfterSlider.slick("slickPrev");
  });

  $("#introSliderNext").on("click", function () {
    beforeAfterSlider.slick("slickNext");
  });
});

/* До - после 1 */
$(document).ready(function () {
  const gallery = document.querySelector(".before-after__gallery");
  const galleryResize = document.querySelector(".before-after__gallery-after");
  const before = document.querySelector("#before");
  const after = document.querySelector("#after");

  if (gallery && galleryResize && before && after) {
    gallery.addEventListener("mousemove", (event) => {
      let x = event.offsetX;
      galleryResize.classList.remove("tr");
      galleryResize.style.width = x + "px";
    });

    gallery.addEventListener("mouseleave", (event) => {
      galleryResize.style.width = "50%";
      galleryResize.classList.add("tr");
    });

    before.onclick = () => {
      galleryResize.classList.add("tr");
      galleryResize.style.width = "50px";
    };

    after.onclick = () => {
      galleryResize.classList.add("tr");
      galleryResize.style.width = "90%";
    };
  }
});

/* До - после 2 */
$(document).ready(function () {
  const gallery2 = document.querySelector(".before-after2__gallery");
  const galleryResize2 = document.querySelector(
    ".before-after2__gallery-after"
  );
  const before2 = document.querySelector("#before2");
  const after2 = document.querySelector("#after2");

  if (gallery2 && galleryResize2 && before2 && after2) {
    gallery2.addEventListener("mousemove", (event) => {
      let x = event.offsetX;
      galleryResize2.classList.remove("tr");
      galleryResize2.style.width = x + "px";
    });

    gallery2.addEventListener("mouseleave", (event) => {
      galleryResize2.style.width = "50%";
      galleryResize2.classList.add("tr");
    });

    before2.onclick = () => {
      galleryResize2.classList.add("tr");
      galleryResize2.style.width = "50px";
    };

    after2.onclick = () => {
      galleryResize2.classList.add("tr");
      galleryResize2.style.width = "90%";
    };
  }
});

/* До - после 3 */
$(document).ready(function () {
  const gallery3 = document.querySelector(".before-after3__gallery");
  const galleryResize3 = document.querySelector(
    ".before-after3__gallery-after"
  );
  const before3 = document.querySelector("#before3");
  const after3 = document.querySelector("#after3");

  if (gallery3 && galleryResize3 && before3 && after3) {
    gallery3.addEventListener("mousemove", (event) => {
      let x = event.offsetX;
      galleryResize3.classList.remove("tr");
      galleryResize3.style.width = x + "px";
    });

    gallery3.addEventListener("mouseleave", (event) => {
      galleryResize3.style.width = "50%";
      galleryResize3.classList.add("tr");
    });

    before3.onclick = () => {
      galleryResize3.classList.add("tr");
      galleryResize3.style.width = "50px";
    };

    after3.onclick = () => {
      galleryResize3.classList.add("tr");
      galleryResize3.style.width = "90%";
    };
  }
});

//4
$(document).ready(function () {
  var gallery4 = document.querySelector(".before-after4__gallery");
  var galleryResize4 = document.querySelector(".before-after4__gallery-after");
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
});

//5
$(document).ready(function () {
  var gallery5 = document.querySelector(".before-after5__gallery");
  var galleryResize5 = document.querySelector(".before-after5__gallery-after");
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
});

//6
$(document).ready(function () {
  var gallery6 = document.querySelector(".before-after6__gallery");
  var galleryResize6 = document.querySelector(".before-after6__gallery-after");
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
});

//7
$(document).ready(function () {
  var gallery7 = document.querySelector(".before-after7__gallery");
  var galleryResize7 = document.querySelector(".before-after7__gallery-after");
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
});

//8
$(document).ready(function () {
  var gallery8 = document.querySelector(".before-after8__gallery");
  var galleryResize8 = document.querySelector(".before-after8__gallery-after");
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
});

//9
$(document).ready(function () {
  var gallery9 = document.querySelector(".before-after9__gallery");
  var galleryResize9 = document.querySelector(".before-after9__gallery-after");
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
});

//10
$(document).ready(function () {
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
});

/* *************************************************
Карусель с докторами на главной странице */

$("#slickCarousel").slick({
  dots: true,
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
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

//Отправка формы
$(document).ready(function () {
  var isFormValid = false; // Флаг для отслеживания состояния валидации

  $("#form-1").validate({
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
      if ($("#checkbox").is(":checked")) {
        isFormValid = true;
      } else {
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false;
      }
    },
  });

  $("#form-modal").validate({
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
      if ($("#checkboxModal").is(":checked")) {
        isFormValid = true;
      } else {
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false;
      }
    },
  });

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
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false;
      }
    },
  });

  $("#form-3").validate({
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
      if ($("#checkbox-3").is(":checked")) {
        isFormValid = true;
      } else {
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false;
      }
    },
  });

  if ($("#form-1, #form-2, #form-3, #form-modal").length) {
    $("#form-1, #form-2, #form-3, #form-modal").submit(function (e) {
      e.preventDefault();

      var form = $(this);

      if (!form.valid() || !isFormValid) {
        return;
      }

      var submitButton = form.find(".btn_submit");
      var originalButtonText = submitButton.val();

      submitButton.val("Отправка...").prop("disabled", true);

      $.ajax({
        type: "POST",
        url: "https://zubkivsem.ru/wp-content/themes/dental/assets/mailer/smart.php",
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
  }
});

$(document).ready(function () {
  var formFooter = $("#form-footer"); // Сохраняем ссылку на форму в переменную

  formFooter.validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
    },
    messages: {
      email: {
        required: "Введите email",
        email: "Неправильно введен email",
      },
    },
    submitHandler: function (form) {
      var $submitButton = $(form).find('input[type="submit"]');
      var originalButtonText = $submitButton.val(); // Сохраняем оригинальный текст кнопки

      $submitButton.val("Отправка...");

      $.ajax({
        type: "POST",
        url: "https://zubkivsem.ru/wp-content/themes/dental/assets/mailer/smart.php",
        data: $(form).serialize(),
        success: function (response) {
          $submitButton.val(originalButtonText); // Восстанавливаем оригинальный текст кнопки
          $(form)[0].reset(); // Очищаем поля формы
          $(".modal__overlay, #thanksModalEmail").fadeIn();
        },
        error: function () {
          $submitButton.val(originalButtonText); // Восстанавливаем оригинальный текст кнопки
          // Обработка ошибки отправки формы
        },
      });
    },
  });

  // Дополнительные операции с формой #form-footer
  // ...
});

/* Маска номера телефона */
$("input[name=phone]").mask("+7 (999) 999-99-99");

/* ===================================================
Модальные окна */
$(document).on("click", "[data-modal=mainModal]", function () {
  $(".modal__overlay, #mainModal").fadeIn();
});

$(document).on(
  "click",
  ".modal__close, .thanks-modal__btn, .modal__overlay-item",
  function () {
    $(".modal__overlay, #mainModal, #thanksModal, #thanksModalEmail").fadeOut();
  }
);

//Видео в модальном окне
$("[data-modal=videoModal]").on("click", function () {
  $(".modal__overlay, #videoModal").fadeIn();
});

$(".modal__close, .modal__overlay-item").on("click", function () {
  $(".modal__overlay, #videoModal").fadeOut();
  var videoPlayer = $("#videoModal").find("iframe").get(0);
  var videoSrc = videoPlayer.src;
  videoPlayer.src = ""; // Остановка воспроизведения
  videoPlayer.src = videoSrc; // Восстановление исходного источника видео
});

/* ===================================================
Кнопка НАВЕРХ */
const offset = 100;
const scrollUp = document.querySelector(".scroll-up");
const scrollUpSvgPath = document.querySelector(".scroll-up__svg-path");
const pathLength = scrollUpSvgPath.getTotalLength();

scrollUpSvgPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
scrollUpSvgPath.style.transition = "stroke-deshoffset 20ms";

const getTop = () => window.pageYOffset || document.documentElement.scrollTop;

//updateDashoffset
const updateDashoffset = () => {
  const height = document.documentElement.scrollHeight - window.innerHeight;
  const dashoffset = pathLength - (getTop() * pathLength) / height;

  scrollUpSvgPath.style.strokeDashoffset = dashoffset;
};

//onScroll
window.addEventListener("scroll", () => {
  updateDashoffset();

  if (getTop() > offset) {
    scrollUp.classList.add("scroll-up--active");
  } else {
    scrollUp.classList.remove("scroll-up--active");
  }
});

//click
scrollUp.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

updateDashoffset();

//Кнопка ПОДРОБНЕЕ - СКРЫТЬ - ГЛАВНАЯ СТРАНИЦА
//====================================
var textHiddenBtn = document.getElementById("textHiddenBtnHome");
var textHidden = document.getElementById('textHiddenHome')

if (textHiddenBtn && textHidden) {
  textHiddenBtn.addEventListener("click", function () {
    if (textHiddenHome.classList.contains('text-hiddenHome')) {
			// Показываем скрытый элемент
			textHiddenHome.classList.remove('text-hiddenHome')
			textHiddenHome.classList.add('text-visibleHome')
			textHiddenBtn.textContent = 'Скрыть'
		} else {
			// Скрываем элемент
			textHiddenHome.classList.remove('text-visibleHome')
			textHiddenHome.classList.add('text-hiddenHome')
			textHiddenBtn.textContent = 'Подробнее'
		}
  });
}

//Кнопка ПОДРОБНЕЕ - СКРЫТЬ
//====================================
var textHiddenBtn = document.getElementById("textHiddenBtn");
var textHidden = document.getElementById("textHidden");

if (textHiddenBtn && textHidden) {
  textHiddenBtn.addEventListener("click", function () {
    if (textHidden.classList.contains("text-hidden")) {
      // Показываем скрытый элемент
      textHidden.classList.remove("text-hidden");
      textHidden.classList.add("text-visible");
      textHiddenBtn.textContent = "Скрыть";
    } else {
      // Скрываем элемент
      textHidden.classList.remove("text-visible");
      textHidden.classList.add("text-hidden");
      textHiddenBtn.textContent = "Подробнее";
    }
  });
}
