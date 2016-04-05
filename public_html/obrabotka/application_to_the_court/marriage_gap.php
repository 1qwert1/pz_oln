<?php include 'header_for_court.php' ?>


</div>

<div class="center_name"><b>Позовна заява
        про розірвання шлюбу</b></div>
<div class="text">
    <p>  <?php echo $_POST['date_marriage'] ?> року між мною та Відповідачем було укладено шлюб, про що в книзі
        реєстрації
        актів про укладення шлюбу <?php echo $_POST['place_marrige'] ?> було зроблено запис за
        № <?php echo $_POST['number_marrige'] ?>.</p>


    <p><?php

        if ($_POST[count_child] > 0) {
            echo 'Від цього шлюбу у нас ';
            if ($_POST[count_child] == 1) {
                echo 'народилась дитина - ' . $_POST[child_name_1] . ' ' . $_POST[date_born_child_1] . ' року народження.';
            } else echo 'народилися діти: ' . '<div class="children" style="color:inherit"><ul></ul></div>';

        }
        ?></p>


    <p>Вважаю, що шлюб між нами є лише формальним, оскільки особисті відносини між мною та Відповідачем уже
        тривалий
        час мають негативний характер, між нами відсутнє нормальне спілкування. Продовжувати такі шлюбні відносини я
        не
        бажаю.
        Вважаю також, що надання строку на примирення не виправить стан наших шлюбних відносин, оскільки вказані
        вище
        обставини продовжуються протягом тривалого часу, а спроби примирення між нами в минулому не принесли жодних
        результатів. Тому, це лише погіршить стан моїх відносин з Відповідачем та продовжить їх перебіг в часі.
        На підставі викладеного, керуючись ст. ст. 24, 110, 112 СК України та ст. ст. 3, 118, 119 ЦПК України,
    </p>
    <p class="request"><b>Прошу :</b></p>
    <p>
    <ol>
        <li>Задовольнити позов про розірвання шлюбу</li>
        <li>Розірвати шлюб між мною - <?php echo $_POST['name_poz'] ?> , та Відповідачем
            - <?php echo $_POST['name_vidp'] ?>,
            зареєстрований <?php echo $_POST['place_marrige'] ?>
            за актовим записом № <?php echo $_POST['number_marrige'] ?>.
        </li>
        <li>Судові витрати покласти на Відповідача</li>
    </ol>
    </p>
    <br>
    <br>
    <p style="text-align: left;">Додатки:</p>


    <div class="amount_child"><p><ol>
        <li>Копія Свідоцтва про укладення шлюбу</li>
        <li>Копія позовної заяви та доданих документів для відповідача</li>
        <li>Квитанції про сплату судового збору та витрат</li>
    </ol></p></div>


</div>

<table>
    <tr>


        <td colspan="2"><?php echo date("d.m.Y"); ?> року</td>
        <td colspan="2" class="rig">_________________</td>
        <td colspan="2"><?php echo $_POST['name_poz'] ?></td>
    </tr>

</table>


</div>


<script>


    var names = '<?php
        for ($i = $_POST['count_child']; $i > 0; $i--) {
            echo $_POST["child_name_" . $i] . ',';
        }
        ?>';
    var dates = '<?php
        for ($i = $_POST['count_child']; $i > 0; $i--) {
            echo $_POST["date_born_child_" . $i] . ',';
        }
        ?>';

    var arrname = names.split(',');
    var arrdate = dates.split(',');


    var liMaker = function () {
        for (var i = 0; i < arrname.length - 1; i++) {
            $(".amount_child ol").append('<li>Копія Свідоцтва про народження ' + arrname[i].replace(/([А-ЯІЇЄ][а-яіїє’-]+)\s?([А-ЯІЇЄ]).+\s?([А-ЯІЇЄ]).+/, '$1 $2.$3.') + '</li>');
            $(".children ul").append('<li>' + arrname[i] + '  ' + arrdate[i] + ' року народження</li>');
            console.log('дети есть');
        }
    };

    liMaker();
</script>