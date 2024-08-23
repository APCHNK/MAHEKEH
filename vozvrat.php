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
    <link rel="stylesheet" href="./inner-assets/stylesheet3.css" type="text/css" />
</head>

<body>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Инструкция по возврату товара</h1>
            <p><strong>В течении 14 дней</strong> с момента покупки товара, вы можете вернуть нам товар при соблюдении всех перечисленных условий.</p>

            <p><strong>Правила возврата</strong></p>

            <ul>
                <li>1. Отправить на почту <a href="email:maneken.ua@ukr.net">maneken.ua@ukr.net</a> Ф.И.О Артикул и номер заказа, указать причину возврата.</li>
                <li>2. Товар должен сохранять надлежащий вид и не иметь следы носки, иметь целостность упаковки бирки.</li>
                <li>3. Отправить товар почтовой службой той которой вы получали товар.</li>
            </ul>

            <p>В течении 4 рабочих дней после поступления товара на склад, мы вернем средства на указанную вами банковскую карту.</p>

            <p><strong>Внимание</strong></p>

            <ul>
                <li>Услуги возврата товара оплачиваются покупателем.</li>
                <li>Если вы укажете в посылке наложенный платеж или за счет получателя, мы не сможем получить посылку.</li>
                <li>По истечению 14 дней после получения товара возврат или обмен невозможен.</li>
                <li>В случае несоответствия заказа, либо брака, оплата доставки за счет магазина.</li>
            </ul>

            <p><em>После заполнения и отправки возврата, обязательно свяжитесь и сообщите в онлайн чате или по телефону.</em></p>

            <p><strong>Возврат денежных средств</strong></p>

            <ul>
                <li>Возврат денежных средств производится в течении рабочей неделеи, начало процедуры возврата с момента получения возврата на складе магазина.</li>
                <li>Доставка возврата товара оплачивается при отправке на почтовом отделении.</li>
                <li>Посылку нужно отправить без дополнительной оценочной стоимости и наложенного платежа.</li>
                <li>Изделия должны сохранять товарный вид и не иметь следов носки, упаковка должна быть сохранена в оригинальном виде.</li>
            </ul>
        </div>
    </div>
</body>

</html>