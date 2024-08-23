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
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <section class="sec_jackets">
            <div class="container">
                <div class="text">
                    <h2>КУРТКИ</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f1.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f2.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f3.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f4.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f5.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f6.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f7.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f8.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f9.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f10.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f11.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f12.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f13.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f14.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f15.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f16.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f17.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f18.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f19.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/kurtki/f20.jpg" alt=""></div>
                        <div class="price">
                            <p>700 грн.</p>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require "modal.php" ?>
    <?php require "footer.php" ?>