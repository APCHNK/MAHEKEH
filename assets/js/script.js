// начало код срабатывания бургер меню на чистом javascript
var burgerCtr = document.querySelector("#burger-menu");
var menuCtr = document.querySelector("#mobile-menu");
burgerCtr.addEventListener("click", function () {
  this.classList.toggle("active");
  menuCtr.classList.toggle("show_mobile_menu");
});
// конец бургера

// ---------------------------------------------------------------------

$(document).click(function (e) {
  // скрипт для клика по элементу и вне его
  if ($(e.target).closest(".pop-up").length) {
    // вместо .pop-up ставим свой клас
    // клик по элементу .pop-up
    return;
  }
  // условие по клику снаружи элемента
});

// ---------------------------------------------------------------------
$(document).ready(function () {
  //плавный скролл
  var $page = $("html, body");
  $('a[href*="#"]').click(function () {
    $page.animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top,
      },
      400
    );
    return false;
  });
  //
});

