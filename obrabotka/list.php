
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
//
//
//
//сли пришли данные то подключаем хедер , печатную форму в зависимости от выбора на главной и футер
include '../for_form/recaptchalib.php';

if ($response != null && $response->success) {



    if($_SESSION['$val']==1):
        include 'application_to_the_court/marriage_gap.php';
    endif;
    echo '<button onclick=print() class="butt">До друку</button>';



} else {

    echo '<h1>Вы робот? Если нет не забудьте пройти проверку</h1>';
    header( 'Refresh:5; URL=http://pozov.online/' );



}

include '../for_form/footer.php';





