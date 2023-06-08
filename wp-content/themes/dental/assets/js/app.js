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

/* Закрываем боковое меню при клике на ссылку */

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
      autoplaySpeed: 5000,
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
    tabsBtn.forEach(onTabClick);

    function onTabClick(item) {
      item.addEventListener("click", function () {
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
    document.querySelector(".tabs__nav-btn").click();
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
    accTitles[0].classList.add("active");
    accContents[0].classList.add("active");
    accContents[0].style.maxHeight = accContents[0].scrollHeight + "px";

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
          activeContent.style.maxHeight = activeContent.scrollHeight + "px";
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
          breakpoint: 1025,
          settings: {},
        },
        {
          breakpoint: 769,
          settings: {
            dots: true,
          },
        },
        {
          breakpoint: 481,
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

/* *************************************************
Далидация форм. Использовал jquery.validate.min.js */
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
        required: true, // Добавление обязательного заполнения чекбокса
      },
    },
    messages: {
      name: "Введите имя",
      phone: "Введите телефон",
      email: {
        email: "Неправильно введен email",
      },
      checkbox: "Пожалуйста, отметьте этот чекбокс", // Сообщение об ошибке для чекбокса
    },
    submitHandler: function (form) {
      // Обработчик отправки формы
      if ($("#checkbox").is(":checked")) {
        isFormValid = true; // Устанавливаем флаг в true, если чекбокс выбран
      } else {
        // Если чекбокс не выбран, выполняем необходимые действия
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false; // Устанавливаем флаг в false
      }
    },
  });

  //форма модального окна
  $("#form-modal").validate({
    rules: {
      name: "required",
      phone: "required",
      email: {
        email: true,
      },
      checkbox: {
        required: true, // Добавление обязательного заполнения чекбокса
      },
    },
    messages: {
      name: "Введите имя",
      phone: "Введите телефон",
      email: {
        email: "Неправильно введен email",
      },
      checkbox: "Пожалуйста, отметьте этот чекбокс", // Сообщение об ошибке для чекбокса
    },
    submitHandler: function (form) {
      // Обработчик отправки формы
      if ($("#checkboxModal").is(":checked")) {
        isFormValid = true; // Устанавливаем флаг в true, если чекбокс выбран
      } else {
        // Если чекбокс не выбран, выполняем необходимые действия
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false; // Устанавливаем флаг в false
      }
    },
  });

  //форма на главной странице в разделе "Наши работы"
  $("#form-2").validate({
    rules: {
      name: "required",
      phone: "required",
      email: {
        email: true,
      },
      checkbox: {
        required: true, // Добавление обязательного заполнения чекбокса
      },
    },
    messages: {
      name: "Введите имя",
      phone: "Введите телефон",
      email: {
        email: "Неправильно введен email",
      },
      checkbox: "Пожалуйста, отметьте этот чекбокс", // Сообщение об ошибке для чекбокса
    },
    submitHandler: function (form) {
      // Обработчик отправки формы
      if ($("#checkbox-2").is(":checked")) {
        isFormValid = true; // Устанавливаем флаг в true, если чекбокс выбран
      } else {
        // Если чекбокс не выбран, выполняем необходимые действия
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false; // Устанавливаем флаг в false
      }
    },
  });

  //форма на главной странице в разделе "Наши лаборатория"
  $("#form-3").validate({
    rules: {
      name: "required",
      phone: "required",
      email: {
        email: true,
      },
      checkbox: {
        required: true, // Добавление обязательного заполнения чекбокса
      },
    },
    messages: {
      name: "Введите имя",
      phone: "Введите телефон",
      email: {
        email: "Неправильно введен email",
      },
      checkbox: "Пожалуйста, отметьте этот чекбокс", // Сообщение об ошибке для чекбокса
    },
    submitHandler: function (form) {
      // Обработчик отправки формы
      if ($("#checkbox-3").is(":checked")) {
        isFormValid = true; // Устанавливаем флаг в true, если чекбокс выбран
      } else {
        // Если чекбокс не выбран, выполняем необходимые действия
        alert("Пожалуйста, дайте согласие на обработку персональных данных");
        isFormValid = false; // Устанавливаем флаг в false
      }
    },
  });

  $("#form-footer").validate({
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
  });

  //общий скрипт отправки письма
  if ($("form").length) {
    $("form").submit(function (e) {
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
        url: "/dental/wp-content/themes/dental/assets/mailer/smart.php",
        //адрес нужно заменить после посадки на реальный хостинг
        data: form.serialize(),
      }).done(function () {
        form.find("input").val("");
        $("#mainModal").fadeOut();

        $(".modal__overlay, #thanksModal").fadeIn();
        form[0].reset(); // Сбросить значения всех остальных полей формы

        submitButton.val(originalButtonText).prop("disabled", false);
      });

      return false;
    });
  }
});

/* Маска номера телефона */
$("input[name=phone]").mask("+7 (999) 999-99-99");

/* ===================================================
Модальные окна */
$("[data-modal=mainModal]").on("click", function () {
  $(".modal__overlay, #mainModal").fadeIn();
});

$(".modal__close, .thanks-modal__btn").on("click", function () {
  $(".modal__overlay, #mainModal, #thanksModal").fadeOut();
});
