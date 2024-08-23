<footer>
  <div class="container">
    <div class="l">
      <img src="./assets/img/foot.svg" alt="">
      <div class="text">Інформація</div>
      <a href="tel:+380938745700">+38 (093)-874-57-00</a>
      <div class="text">з 9:00 до 21:00 без вихідних</div>
      <a href="mailto:maneken.ua@ukr.net">maneken.ua@ukr.net</a>
      <div class="text">© 2022-2023 Магазин TOВ "Манекен ЮА"</div>
    </div>
    <div class="r">
      <ul>Допомога
        <li><a href="./oplata.php">Як сплатити замовлення</a></li>
        <li><a href="./dostavka.php">Умови доставки товарів</a></li>
        <li><a href="./publichnaya-oferta.php">Публічна оферта</a></li>
        <li><a href="./vozvrat.php">Повернення товару</a></li>
        <li>Контакти</li>
        <li>Головна</li>
      </ul>
    </div>
  </div>
</footer>
</div>

<link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
<!-- FOR MODAL -->
<script src="./assets/js/classie.js"></script>
<script src="./assets/js/modalEffects.js"></script>
<script src="./assets/js/cssParser.js"></script>
<!-- FOR MODAL -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./assets/js/script.js"></script>
<link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css">
<script src="./assets/js/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
    slidesPerView: 3,
    loop: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      420: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 480px
      628: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 640px
      992: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });
</script>
<script>
  $(".burger-bm").click(function() {
    $(".wyp").toggleClass("active");
  });
</script>
</body>

</html>