
<!--форма для ввода данных истца и ответчика-->



<h4>Прізвище ім'я по батькові позивача у називному відмінку</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="Петренко Семен Васильович"
           name="name_poz" pattern='([А-ЯІЇЄ][а-яіїє’-]+[\s]?){3,}'>
</div>

<h4>Стать позивача</h4>
<div class="form-group">

    <div style="display: table"><input checked  type="radio" class="" name="sex" value="1" style="width: 40px; display: inline">
        <span style="display: table-cell; vertical-align: middle">Чоловіча</span></div>
    <div style="display: table"><input type="radio" class="" name="sex" value="1" style="width: 40px; display: inline">
        <span style="display: table-cell; vertical-align: middle">Жіноча</span></div>

</div>

<h4>Адреса позивача</h4>
<div class="form-group">

    <input required  type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
           name="adress_poz">
</div>

<h4>Телефон позивача</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="0505322688"
           name="tel_poz">
</div>

<!--если иск по браку то подключаем ответчика физика-->


<?php if($_SESSION['$val'] == 1):?>


<h4>Прізвище ім'я по батькові відповідача у називному відмінку</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="Петренко Семен Васильович"
           name="name_vidp" pattern='([А-ЯІЇЄ][а-яіїє’-]+[\s]?){3,}'>
</div>


<h4>Адреса відповідача</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
           name="adress_vidp">
</div>

    <h4>Телефон відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" placeholder="0505322688"
               name="tel_vidp">
    </div>
    <?php include 'divorcement.php'?>

    <!--иначе юрик-->

<?php else: ?>


    <h4>Назва відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" placeholder='ТОВ "Будівельник і Ко"'
               name="name_vidp">
    </div>

    <h4>Код ЄДРПОУ відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" pattern="[0-9]{8}" placeholder="00000000"
               name="kod_vidp">
    </div>


    <h4>Адреса відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
               name="adress_vidp">
    </div>

    <h4>Телефон відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" placeholder="0505322688"
               name="tel_vidp">
    </div>

<?php endif ?>

<!--если нужен иск по зарплате то подключаем еще форму-->

<?php if ($_SESSION['$val'] == 2 ||$_SESSION['$val'] == 3) {
    include 'wage.php';
}?>

