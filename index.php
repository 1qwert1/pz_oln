<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--            <meta http-equiv="refresh" content="10">-->
    <title>Позов онлайн</title>
    <script src="css/modernizer.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="libs/animate/animate.min.css"/>
    <link rel="stylesheet" href="css/fonts.css"/>

    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <script src="libs/jquery/jquery-2.1.3.min.js"></script>

</head>
<body>



<div class="loader">
    <div class="loader_inner"></div>
</div>

<header class="site__header island">
    <div class="wrap">
        <span style="display: block;"><h1 class="site__title mega">Позов онлайн<sup><i class="fa fa-copyright" style="font-size: small"></sup></i></h1></span>
        <span class="beta subhead">абсолютно безкоштовний юридичний ресурс, сформований за ініціативи
            практикуючих правників України, який дозволяє сформувати позов, заяву до суду, договір та ін.
            документи не витрачаючи ваш час та кошти на юристів.
        </span>
    </div>
</header>
<!--<div class="container">-->
<main class="site__content island" role="content">
    <div class="tooltip top">Будь-ласка, оберіть категорію та дайте відповідь на декілька
           простих запитань, після чого Вашу заяву до суду (позовну заяву, договір тощо ) буде сформовано
    </div>
    <div class="wrap">
        <form action="for_form/forms.php" method="post">

            <select class="input" name="select">

            <optgroup label="Позовні заяви">
                <option value="1">Про розірвання шлюбу</option>
                <option value="2">Про стягнення нарахованої, але невиплаченої заробітної плати</option>
            </optgroup>

            <optgroup label="Договори">
                <option value="101">Підряду (для замовника)</option>
                <option value="102">Підряду (для виконавця)</option>
                <option value="103">На надання послуг з просування торгової марки</option>

                <option>Поставки</option>
            </optgroup>

            <optgroup label="Заяви до суду">
                <option value="201">Поновлення сроків</option>

            </optgroup>

            </select>
            <button name="submit" class="butt">Сформувати</button>


        </form>

        <!--        <p>-->
        <!--            <small>Будь-ласка, оберіть категорію та дайте відповідь на декілька-->
        <!--                простих запитань, після чого Вашу заяву до суду(позовну заяву, договір тощо ) буде сформовано-->
        <!--            </small>-->
        <!--        </p>-->

        <hr>

        <p>
            <small>Сервіс сформовано з метою покращення якості надання юридичних послуг населенню.</small>
        </p>
    </div>
</main>


<!--</div>-->


<!--<div class="hidden"></div>-->




<script src="js/common.js"></script>

<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>