
<!--основная форма для ввода пользовательских данных-->


<?php


    session_start();

    $_SESSION['$val'] = $_POST['select'];

    switch ($_SESSION['$val']) {
        case '1':
            $val_ = '"Позовної заяви про розірвання шлюбу"';
            break;
        case '2':
            $val_ = '"Позовної заяви про стягнення нарахованої, але невиплаченої заробітної плати,
            середнього заробітку за час затримки розрахунку" <br><small>перед поданням позовної заяви
            ми пропонуємо подати заяву про видачу судового наказу, в зв\'язку з наявністю спору, що до
            середнього заробітку за час затримки розрахунку, суд Вам скоріше всього відмовить та це
            надасть Вам можливість подавати позов в порядку позовного провадження </small>';
            break;
        case '3':
            $val_ = '"Заяви про стягнення нарахованої, але невиплаченої заробітної плати, середнього заробітку
             за час затримки розрахунку (наказне провадження)" <small></small>';
            break;
        case '101':
            $val_ = '"Договору підряду (для замовника)"';
            break;
        case '102':
            $val_ = 'Договору підряду (для виконавця)';
            break;
        case '103':
            $val_ = '"Договору на надання послуг з просування торгової марки"';
            break;
        case '104':
            $val_ = '"Договору поставки"';
            break;
        case '201':
            $val_ = '"Заяви до суду про поновлення сроків"';
            break;
    }
    ?>

    <?php include 'header.php' ?>


    <!--    --><?php
//    $mysqli = new mysqli("127.0.0.1", "root", "170158", "po", 3306);
//    if ($mysqli->connect_errno) {
//    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//    }
//
//    echo $mysqli->host_info . "\n";
//
    ?>

    <form action="../obrabotka/list.php" method="post">

    <?php if ($_SESSION['$val'] <= 100 || $_SESSION['$val'] > 200) {
    include 'court_tmp.php';
    include 'name_address.php';
} else {
        if ($_SESSION['$val'] == 101) {
            include 'bilding.php';
        }
    include 'agreement.php';
}
    ?>



<!--        <br>-->
<!--        <div id="recaptcha"></div>-->

       <button name="submit" class="butt"><h4>Далі</h4></button>

    </form>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>

    <br>


    <br>

    <?php include 'footer.php' ?>





