<?php
session_start();

switch ($_SESSION['$val']) {
    case '101':
        $name_contr = 'ПІДРЯДУ';
        $name_stor_1 = 'Генпідрядник';
        $name_stor_2 = 'Підрядник';
        break;
    case '102':
        $name_contr = 'ПОСТАВКИ';
        $name_stor_1 = 'Постачальник';
        $name_stor_2 = 'Замовник';
        break;
    case '103':
        $name_contr = 'ПОСТАВКИ';
        $name_stor_1 = 'Постачальник';
        $name_stor_2 = 'Замовник';
        break;
    case '104':
        $name_contr = 'ПРО НАДАННЯ БЕЗВІДСОТКОВОЇ ПОВОРОТНОЇ ФІНАНСОВОЇ ДОПОМОГИ';
        $name_stor_1 = 'Позикодавець';
        $name_stor_2 = 'Позичальник';
        break;
    case '105':

        break;
    case '106':

        break;
    case '107':

        break;
    case '108':

        break;
}

?>


<div style="padding-left: 18px"><div style="width: 100%; text-align: center; margin-top: 40px">ДОГОВІР <?php echo $name_contr ?> №____________</div>

    <div style="float: left; width: 50%; text-align: left; margin-top: 40px"><?php echo $_POST[date_contr] ?> року</div>
    <div style="float: right; width: 50%; text-align: right; margin-top: 40px"><?php echo $_POST[place_contr] ?></div>
    <div class="contract" style="margin-top: 90px; clear: both;text-align: justify; ">

        <!--   стиль списка-->

        <style>
            * {
                color:#444444
            }
            ol {
                counter-reset: li; /*Идентифицируем счетчик и даем ему имя li. Значение счетчика не указано - по умолчанию оно равно 0*/
                list-style: none; /*убираем стандартную нумерацию*/
            }

            li:before {
                counter-increment: li; /*Определяем элемент, который будет нумероваться — li. Псевдоэлемент before указывает, что содержимое, вставляемое при   помощи свойства content, будет располагаться до пунктов списка. Здесь же устанавливается значение приращения счетчика -по умолчанию равно 1.*/

                content: counters(li, ".") ". "; /*С помощью свойства content выводится номер пункта списка. counters() означает, что генерируемый текст представляет собой значения всех счетчиков с таким именем. Точка в кавычках добавляет разделяющую точку между цифрами, а точка с пробелом добавляется перед содержимым каждого пункта списка*/
            }

            ol.center_ol {
                padding-left: 0px;
            }

            .center_ol > li {
                padding-bottom: 20px;
                padding-top: 20px;
                text-align: center;
                font-weight: 800;
                padding-left: 0px;
            }

            li::before {
                padding-right: 10px;

            }

            li {
                text-align: justify;

            }

            .left_ol {
                text-align: left;
                font-weight: 200;
                padding-left: 0px;
            }</style>

        <!--
        Шапка договора - чтороны

        -->
        <p>
            <b> <?php echo $_POST[name_1] ?></b>, надалі – «<?php  echo $name_stor_1?>», що є <?php
            if ($_POST[platn_prib_1]) {
                echo 'платником податку на
        прибуток';
            } else echo 'платником єдиного податку'

            ?> відповідно до чинного законодавства України, в особі: <?php echo $_POST[posada_1] . ' ' . $_POST[fio_1] ?>,
            що діє на підставі <?php echo $_POST[stat_1] ?>, з однієї сторони, та
        </p>
        <p><b> <?php echo $_POST[name_2] ?></b>,
            надалі – «<?php  echo $name_stor_2?>», що є <?php
            if ($_POST[platn_prib_2]) {
                echo 'платником податку на
        прибуток';
            } else echo 'платником єдиного податку'

            ?> відповідно до чинного законодавства України, в особі: <?php echo $_POST[posada_2] . ' ' . $_POST[fio_2] ?>,
            що діє на підставі <?php echo $_POST[stat_2] ?> з іншої сторони,
            Генпідрядник та Підрядник надалі разом іменовані «Сторони», а кожний окремо – «Сторона», уклали
            цей ДОГОВІР <?php echo $name_contr ?> № _________ від <?php echo $_POST[date_contr] ?> року (надалі – «Договір») про таке:

        </p>
