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
    <link rel="stylesheet" href="./inner-assets/stylesheet1.css" type="text/css" />
</head>

<body>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Условия доставки товаров</h1>
            <div>Украина,&nbsp;<strong> Стоимость доставки по тарифам почтовых служб.</strong>
                <ul>
                    <li><em>- Новая почта - от 60 грн</em><br>
                        <em>- Укрпочта - от 45 грн</em><br>
                        <em>- Интайм - от 45 грн</em>
                    </li>
                    <br>
                </ul>




                <p><u>Оплата посылки в случае отказа, оплачивается получателем.</u><br></p>

                <ul>
                </ul>
                <strong>Почтовые службы для доставки в Страны СНГ.</strong>

                <ul>
                    <li><em>- EMS - 1010 грн</em><br>
                        <em>- Укрпочта - 578 грн</em>
                    </li>
                    <li><em><br></em></li>
                </ul>
                <strong>Почтовые службы для доставки в ваш город страны ЕВРОПЫ.</strong>

                <ul>
                    <li><em>- EMS - Уточните у менеджера</em><br>
                        <em>- Укрпочта - Уточните у менеджера</em>
                    </li>
                    <br>
                </ul>

                <p>Отправка осуществляется только после полной 100% оплаты.</p>

                <ul>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>