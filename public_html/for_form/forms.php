<!--основная форма для ввода пользовательских данных-->


<?php


session_start();

if ($_POST['submit']) {
    $_SESSION['$val'] = $_POST['submit'];
} elseif ($_POST['select']) {
    $_SESSION['$val'] = $_POST['select'];
} else $_SESSION['$val'] = null;


switch ($_SESSION['$val']) {
    case '1':
        $val_ = '"Позовної заяви про розірвання шлюбу"';
        break;
    case '2':
        $val_ = '"Позовної заяви про стягнення нарахованої, але невиплаченої заробітної плати,
            середнього заробітку за час затримки розрахунку" <br><small>згідно чинного законодавства,
             позовна заява про стягення заробітної плати подається після звернення до суду в порядку
             наказного провадження.</small>';
        break;
    case '3':
        $val_ = '"Заяви про стягнення нарахованої, але невиплаченої заробітної плати, середнього заробітку
             за час затримки розрахунку (наказне провадження)"';
        break;
    case '101':
        $val_ = '"Договору підряду (для замовника)"';
        break;
    case '102':
        $val_ = '"Договору поставки товару (рамковий)"';
        break;
    case '103':
        $val_ = '"Договору поставки товару (з ціною договору)"';
        break;
    case '104':
        $val_ = '"Договору поворотної безвідсоткової фінансової допомоги"';
        break;
    case '120':
        $val_ = '"Статута товариства з обмеженою відповідальністю"';
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
<?php if ($_SESSION['$val']): ?>
    <form action="../obrabotka/list.php" method="post">

        <?php if ($_SESSION['$val'] <= 100 || $_SESSION['$val'] > 200) {
            include 'court_tmp.php';
            include 'name_address.php';
        } elseif ($_SESSION['$val'] == 120) {
            include 'stat.php';
        } else {
            if ($_SESSION['$val'] == 101) {
                include 'bilding.php';
            } elseif ($_SESSION['$val'] == 102) {
                include 'sale_place.php';
            } elseif ($_SESSION['$val'] == 103) {
                include 'sale_price.php';
            } elseif ($_SESSION['$val'] == 104) {
                include 'pozika.php';
            }

            include 'agreement.php';
        }
        ?>


        <!--        <br>-->
        <!--        <div id="recaptcha"></div>-->
        <small>
            <ul class="persdan">
                <li>ми не зберігаємо Ваши персональні данні</li>
                <li>Ваші персональні дані обробляються сервером в автоматичному режимі в реальному часі</li>
                <li>документ, що буде сформовано сервером не зберігаєтся, відповідно до нього маєте доступ лише Ви
                    протягом часу
                    поки не буде розірвано з'єднання
                </li>
                <li>у разі продовження Ви надаєте згоду на зазначене оброблення Ваших персональних даних</li>
            </ul>
        </small>
        <button name="submit" class="butt"><h4>Далі</h4></button>

    </form>
    <!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"-->
    <!--        async defer></script>-->
    <?php
else:echo "<a href='../'>оберіть категорію   <i class='fa fa-hand-o-left'></i></a><br>
<a href='../example'>приклади сформованих документів   <i class='fa fa-hand-o-right'></i></a>";
endif; ?>
<br>


<br>

<?php include 'footer.php' ?>





