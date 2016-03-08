
<!--главная печатная форма-->

<?php
include '../for_form/header.php';
//
session_start();
//
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//
//
//echo $_SESSION['$val'];
//
//
//echo "<pre>";
//var_dump($_SESSION);
//echo "</pre>";



//сли пришли данные то подключаем хедер , печатную форму в зависимости от выбора на главной и футер
include '../for_form/recaptchalib.php';

if ($response != null && $response->success) {
//echo 'ОТКЛЮЧЕНА ПРОВЕРКА РЕКАПТЧИ';

    switch ($_SESSION['$val']) {
        case '1':
            include 'application_to_the_court/marriage_gap.php';
            break;
        case '2':
            include 'application_to_the_court/wage_claim.php';
            break;
        case '3':
            include 'application_to_the_court/wage_claim_nakaz.php';
            break;
        case '101':

            break;
        case '102':

            break;
        case '103':

            break;
        case '104':

            break;
        case '201':

            break;
    }


    echo '<button onclick=print() class="butt">До друку</button>';



} else {

    echo '<h1>Вы робот? Если нет не забудьте пройти проверку</h1>';
    header( 'Refresh:5; URL=http://pozov.online/' );



}

include '../for_form/footer.php';






