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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./inner-assets/stylesheet.css" type="text/css" />
</head>

<body>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Как оплатить заказ</h1>
            <div class="tabs">
                <input id="tab1" type="radio" name="tabs" checked="">
                <label class="ua" for="tab1" title="Wordpress">Украина</label>
                <section id="content-tab1">
                    <strong>Выберите удобный для вас способ оплаты.</strong>
                    <ul>
                        <li>Наличный расчет при получении</li>
                        Вы можете оплатить свой заказ при получении, почтовыми службами:<br>
                        <i class="np-delivery"><img src="./inner-assets/np.svg" alt=""> - Новая почта</i><br>
                        <i class="up-delivery"><img src="./inner-assets/ukr.svg" alt=""> - Укрпочта</i><br>
                        <li>Расчет банковской картой</li>
                        Мы принимаем оплату банковскими картами:<br>
                        <i class="mb-ico"><img src="./inner-assets/mb.svg" alt=""> - Моно банк</i><br>
                        <i class="pb-ico"><img src="./inner-assets/privat.svg" alt=""> - Приват банк</i><br>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</body>

</html>