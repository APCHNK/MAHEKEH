<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
    // load the cache
    $cacheFile = $inputFile . ".cache";
    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }
    $less = new lessc;
    $newCache = $less->cachedCompile($cache);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>MAHEKEH</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="m.svg" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="wyp">
                    <ul>
                        <li>
                            <div class="line-menu"><a href="#sec1">Популярне</a></div>
                        </li>
                        <li>
                            <div class="line-menu"><a href="#sec2">Про нас</a></div>
                        </li>
                        <li>
                            <div class="line-menu"><a href="#sec4">Новинки</a></div>
                        </li>
                        <li>
                            <div class="line-menu"><a href="#sec3">Знижки</a></div>
                        </li>
                    </ul>
                </div>
                <div class="block df ">
                    <div class="burger-bm">
                        <img src="./assets/img/b-h.png" alt="">
                    </div>
                    <div class="photo">
                        <img src="./assets/img/logo.svg" alt="">
                    </div>
                    <div class="menu">
                        <!-- Кнопка Мобильного Меню -->
                        <button id="burger-menu">
                            <div class="box box_item1"></div>
                            <div class="box box_item2"></div>
                            <div class="box box_item3"></div>
                        </button>
                    </div>

                </div>
            </div>
        </header>
        <section class="sec6" id="sec1">
            <div class="container" data-aos="fade-up">
                <div class="text">
                    <h1>Популярне</h1>
                </div>
                <div class="buttons">
                    <div class="button-prev"><img src="./assets/img/arrow.svg" alt=""></div>
                    <div class="button-next"><img src="./assets/img/arrow.svg" alt=""></div>
                </div>
                <div class="swip">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="./assets/img/s1.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="./assets/img/s2.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="./assets/img/s3.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="./assets/img/s4.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="./assets/img/s5.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="./assets/img/s6.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec2" id="sec2">
            <div class="container" data-aos="fade-up">
                <div class="artc">
                    <h1>ПРО НАС</h1>
                </div>
                <div class="info">
                    <div class="inf">
                        <div class="text1">
                            <h2>LOGO – ваш путівник у світ моди</h2>
                        </div>
                        <p>Красивий модний одяг прикрашає жінку і робить її впевненішою у своїй привабливості. Така стильна леді, як правило, успішна в кар'єрі та особистому житті.</p>
                        <p>
                            Перетворитися на сучасних дівчат та жінок пропонує
                            магазин одягу Logo. Тут є все, що мріє будь-яка
                            королева. Все ще вагаєтесь? Ми готові назвати причини,
                            чому потрібно купити одяг онлайн.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3" id="sec3">
            <div class="container">
                <div class="main_photo" data-aos="fade-right"><img src="./assets/img/s4_main_photo.png" alt=""></div>
                <div class="items" data-aos="fade-left">
                    <div class="item">
                        <div class="text">
                            <span>Куртки</span>
                            <a href="jakets.php">перейти</a>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/p1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="text">
                            <span>Футболки</span>
                            <a href="tshorts.php">перейти</a>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/p2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="text">
                            <span>Взуття</span>
                            <a href="boots.php">перейти</a>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/p3.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="text">
                            <span>Модні сукні</span>
                            <a href="dress.php">перейти</a>
                        </div>
                        <div class="photo">
                            <img src="./assets/img/p4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4" id="sec4">
            <div class="container" data-aos="fade-up">
                <div class="text">
                    <h2>НОВИНКИ</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f1.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f2.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f3.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f4.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f5.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f6.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f7.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f8.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f9.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/f10.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require "modal.php" ?>
        <?php require "footer.php" ?>