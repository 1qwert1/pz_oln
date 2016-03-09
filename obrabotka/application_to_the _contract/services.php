<div style="width: 100%; text-align: center; margin-top: 40px">ffffffffffffff</div>

<div style="float: left; width: 50%; text-align: left; margin-top: 40px">22222222222222222</div>
<div style="float: right; width: 50%; text-align: right; margin-top: 40px">Kiev</div>
<div class="contract" style="margin-top: 90px">

    <style>.contract li{ list-style-type: none;
        } /* Убираем исходную нумерацию */
        .contract ol {
            counter-reset: list1;

        } /* Инициируем счетчик */
        .contract ol li:before {

            counter-increment: list1; /* Увеличиваем значение счетчика */
            content: counter(list1) ". "; /* Выводим значение */
        }
        .contract ol ol { counter-reset: list2; } /* Инициируем счетчик вложенного списка */
        .contract ol ol li:before {
            counter-increment: list2; /* Увеличиваем значение счетчика */
            content: counter(list1) "." counter(list2) ". "; /* Выводим значение типа 2.1, 2.2,... */
        }
        .center_ol {
            text-align: center;
            font-weight: 800;
            padding-left: 0px;
        }

        .left_ol {
            text-align: left;
            font-weight: 200;
            padding-left: 0px;
        }</style>

    <ol class="center_ol">
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
        <li>
            <ol class="left_ol">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </li>
    </ol>


</div>