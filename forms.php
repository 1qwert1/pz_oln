<?php
if ($_POST):

    $val = $_POST["select"];

    switch ($val) {
        case 'Про розірвання шлюбу':
            $val = 'позовної заяви про розірвання шлюбу';
            break;
        case 'Купівлі продажу':
            $val = 'договору купівлі продажу';
            break;
        case 'Поновлення сроків':
            $val = 'позовної заяви про поновлення сроків';
            break;
    }
    ?>

<?php include 'header.php'?>
    <?php
    $mysqli = new mysqli("127.0.0.1", "root", "170158", "po", 3306);
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    echo $mysqli->host_info . "\n";
    ?>


        <form action="list.php" method="post">
            <h4>Ваше им'я в родовому відміннику</h4>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="Петренко Семен Васильович"
                       name="name">
            </div>

            <br>
            <h4>Ваша адреса</h4>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
                       name="adress">
            </div>
            <br>
            <h4>Оберіть регіон суду</h4>

            <div class="form-group">
                <!--                <label for="sel1">Select list:</label>-->
                <select class="form-control" name="region">
                    <option value="2">Автономна Республіка Крим</option>
                    <option value="3">Вінницька область</option>
                    <option value="4">Волинська область</option>
                    <option value="5">Дніпропетровська область</option>
                    <option value="6">Донецька область</option>
                    <option value="7">Житомирська область</option>
                    <option value="8">Закарпатська область</option>
                    <option value="9">Запорізька область</option>
                    <option value="10">Івано-Франківська область</option>
                    <option value="11">Київська область</option>
                    <option value="12">Кіровоградська область</option>
                    <option value="13">Луганська область</option>
                    <option value="14">Львівська область</option>
                    <option value="15">Миколаївська область</option>
                    <option value="16">Одеська область</option>
                    <option value="17">Полтавська область</option>
                    <option value="18">Рівненська область</option>
                    <option value="19">Сумська область</option>
                    <option value="20">Тернопільська область</option>
                    <option value="21">Харківська область</option>
                    <option value="22">Херсонська область</option>
                    <option value="23">Хмельницька область</option>
                    <option value="24">Черкаська область</option>
                    <option value="25">Чернівецька область</option>
                    <option value="26">Чернігівська область</option>
                    <option value="27">м. Київ</option>
                    <option value="28">м. Севастополь</option>
                    <option value="29">ВС Центральний регіон</option>
                    <option value="30">ВС Західний регіон</option>
                    <option value="31">ВС Південний регіон</option>
                    <option value="32">ВС ВМС України</option>
                </select>
            </div>


        </form>






    <?php  include 'footer.php'?>



<?php
endif;
?>