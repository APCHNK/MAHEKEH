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
    <link rel="stylesheet" href="./inner-assets/stylesheet2.css" type="text/css" />
</head>

<body>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Публичная оферта</h1>
            <p><strong>1. Общие положения</strong></p>

            <ul>
                <li>1.1 Магазин продает товары через интернет ресурс "Одевалка" 1.2. Как только пользователь оформляет заказ через онлайн-ресурс "Одевалка" он соглашается с условиями данного докуемнта. 1.3. Любые изменения условий магазина, остаются за правом магазина и вступают в силу с момента публикации. 1.4 Покупатель указывая свой номер телефона, адрес электронной почты, соглашается на использование данных, для рабочих и рекламных действий. 1.5 Вся информация предоставленная на сайте может быть с опечатками. 1.6 Если оказалось что товара нет на складе, продавец имеет право аннулировать заказ (уведомив об этом покупателя). 1.7 В случае ошибки предоставленных данных покупателем, вся ответственность остается за покупателем. 1.8 Если товар отсутствует на складе, сумма предоплаты возвращается покупателю на его банковскую карту. 1.9 В ходе оформления заказа покупателю предоставляется информация о оплате на электронный адрес и обговариваются сроки и условия доставки товаров.</li>
            </ul>

            <p><strong>2. Оплата</strong></p>

            <ul>
                <li>2.1 Оплатить товар возможно несколькими способами, на Банковскую карту и наложенным платежом в почтовом отделении в котором получаете товар. 2.2 Зачисления денежных средств могут замедлятся, в зависимости от поставщика денежного перевода.</li>
            </ul>

            <p><strong>3. Доставка</strong></p>

            <ul>
                <li>3.1 Доставка товаров происходит при помощи курьерской(почтовой) службой, сроки и стоимость доставки предоставлена на сайте выбранной почтовой службы. 3.2 В случае если клиент не забрал заказ, в отведенные сроки хранения времени, магазин оставляет право выбора за собой по частичной оплате заказа в следующем заказе.</li>
            </ul>

            <p><strong>4. Возврат товара</strong></p>

            <ul>
                <li>4.1 В течении 14 дней может вернуть заказ при выполнении обязательных условий. 4.2 Товар должен быть в полной комплектации, не использованный не эксплуатировался, сохранен товарный вид, сохранены, пломбы, фирменные ярлыки, бирки в оригинальной со штрих-кодами упаковке.</li>
            </ul>
        </div>
    </div>
</body>

</html>