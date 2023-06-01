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
  // Скрытие изображения загрузки
  $('#loader').fadeOut(300);
});
/* *************************************************
ТАб УСЛУГИ на главной странице */

const tabsBtn = document.querySelectorAll(".tabs__nav-btn");
const tabsItems = document.querySelectorAll(".tabs__item");

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

document.querySelector(".tabs__nav-btn").click();

/* *************************************************
До после - на главной странице 
Slick Slider*/

let beforeAfterSlider = $("#beforeAfterSlider");

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
});

/* Навигация слайдера */
$("#introSliderPrev").on("click", function () {
  beforeAfterSlider.slick("slickPrev");
});

$("#introSliderNext").on("click", function () {
  beforeAfterSlider.slick("slickNext");
});

/* До - после 1 */

const gallery = document.querySelector(".before-after__gallery");
const galleryResize = document.querySelector(".before-after__gallery-after");
const before = document.querySelector("#before");
const after = document.querySelector("#after");

gallery.addEventListener("mousemove", (event) => {
  let x = event.offsetX;
  galleryResize.classList.remove("tr");
  galleryResize.style.width = x + "px";
});

gallery.addEventListener("mouseleave", (event) => {
  galleryResize.style.width = 50 + "%";
  galleryResize.classList.add("tr");
});

before.onclick = () => {
  galleryResize.classList.add("tr");
  galleryResize.style.width = 100 + "px";
};
after.onclick = () => {
  galleryResize.classList.add("tr");
  galleryResize.style.width = 90 + "%";
};

/* До - после 2 */

const gallery2 = document.querySelector(".before-after2__gallery");
const galleryResize2 = document.querySelector(".before-after2__gallery-after");
const before2 = document.querySelector("#before2");
const after2 = document.querySelector("#after2");

gallery2.addEventListener("mousemove", (event) => {
  let x = event.offsetX;
  galleryResize2.classList.remove("tr");
  galleryResize2.style.width = x + "px";
});

gallery2.addEventListener("mouseleave", (event) => {
  galleryResize2.style.width = 50 + "%";
  galleryResize2.classList.add("tr");
});

before2.onclick = () => {
  galleryResize2.classList.add("tr");
  galleryResize2.style.width = 100 + "px";
};
after2.onclick = () => {
  galleryResize2.classList.add("tr");
  galleryResize2.style.width = 90 + "%";
};

/* *************************************************
Карусель с докторами на главной странице */

$("#slickCarousel").slick({
  dots: true,
  arrows: false,
  infinite: false,
  speed: 300,
  infinite: true,

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
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

/* *************************************************
Далидация форм. Использовал jquery.validate.min.js */

$("#form-1").validate({
  rules: {
    name: "required",
    phone: "required",
    checkbox: "required",
    email: {
      email: true,
    },
  },
  messages: {
    name: "Введите имя",
    phone: "Введите телефон",
    email: {
      email: "Неправильно введен email",
    },
  },
});

$("#form-2").validate({
  rules: {
    name: "required",
    phone: "required",
    email: {
      email: true,
    },
  },
  messages: {
    name: "Введите имя",
    phone: "Введите телефон",
    email: {
      email: "Неправильно введен email",
    },
  },
});

$("#form-3").validate({
  rules: {
    name: "required",
    phone: "required",
    email: {
      email: true,
    },
  },
  messages: {
    name: "Введите имя",
    phone: "Введите телефон",
    email: {
      email: "Неправильно введен email",
    },
  },
});

$("#form-4").validate({
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

/* Маска номера телефона */
$("input[name=phone]").mask("+7 (999) 999-99-99");

/* *************************************************
Отправка форм на почту */

$("form").submit(function (e) {
  e.preventDefault();

  if (!$(this).valid()) {
    return;
  }

  var checkbox = $("#form-about-section");
  if (!checkbox.prop("checked")) {
    alert("Пожалуйста, дайте согласие на обработку персональных данных");
    return;
  }

  var checkbox = $("#form-portfolio-about-section");
  if (!checkbox.prop("checked")) {
    alert("Пожалуйста, дайте согласие на обработку персональных данных");
    return;
  }

  var checkbox = $("#form-laboratory-section");
  if (!checkbox.prop("checked")) {
    alert("Пожалуйста, дайте согласие на обработку персональных данных");
    return;
  }

  $.ajax({
    type: "POST",
    url: "wp-content/themes/dental/assets/mailer/smart.php",
    data: $(this).serialize(),
  }).done(function () {
    $(this).find("input").val("");
    $("form").trigger("reset");
  });

  return false;
});
