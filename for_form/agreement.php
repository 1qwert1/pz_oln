<!--для договора-->

<h4>Місце укладення договору</h4>
<div class="form-group">

    <input  type="text" class="form-control" placeholder='м.Київ'
            name="place_contr">
</div>
<h4>Дата укладення договору</h4>
<div class="form-group">

    <input type="text" class="form-control datepicker" placeholder="01.01.1990"
           name="date_contr">

</div>

<!--сторона 1-->

<div class="stor11"><h4>Сторона 1 - замовник, ген.підрядник або покупець</h4>

    <h4>Назва</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder='ТОВ "Будівельник і Ко"'
               name="name_1">
    </div>

    <h4>Код ЄДРПОУ</h4>
    <div class="form-group">

        <input  type="text" class="form-control" pattern="[0-9]{8}" placeholder="00000000 (8 цифр)"
               name="kod_1">
    </div>

    <h4>Посада підписанта</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="директор"
               name="posada_1">
    </div>

    <h4>ПІБ підписанта</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="Петренко Семен Йосипович"
               name="fio_1">
    </div>
    <h4>Підписант діє на підставі</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="Статута"
               name="stat_1">
    </div>

    <h4>Адреса</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
               name="adress_1">
    </div>

    <h4>Платіжні реквізити</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="ПАТ 'Гарний Банк', МФО 121121, п/р 2600111111 "
               name="bank_1">
    </div>


    <label style="color: inherit"><h4>Платник ПДВ</h4>
    <div class="form-group">

        <input type="checkbox" id="vax_1">
    </div></label>
    <br>
    <div id="pdv" style="color: inherit; display: none"><h4>ІПН</h4>
    <div class="form-group">

        <input type="text" class="form-control" pattern="[0-9]{10,12}" placeholder="0000000000 (10-12 цифр)"
               name="vax_1" >
    </div>

    </div>

    <label style="color: inherit"><h4>Платник податку на прибуток на загальних підставах</h4>
    <div class="form-group">

        <input type="checkbox" name="platn_prib_1">
    </div></label>
</div>
<hr>


<!--сторона 2-->


<div class="stor22"><h4>Сторона 2 - виконавець, підрядник або продавець</h4>

    <h4>Назва</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder='ТОВ "Будівельник і Ко"'
               name="name_2">
    </div>

    <h4>Код ЄДРПОУ</h4>
    <div class="form-group">

        <input  type="text" class="form-control" pattern="[0-9]{8}" placeholder="00000000 (8 цифр)"
               name="kod_2">
    </div>

    <h4>Посада підписанта</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="директор"
               name="posada_2">
    </div>

    <h4>ПІБ підписанта</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="Петренко Семен Йосипович"
               name="fio_2">
    </div>
    <h4>Підписант діє на підставі</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="Статута"
               name="stat_2">
    </div>
    <h4>Ліцензія (за наявності) - серія, номер, коли видана, термін дії</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="МАФ №25444421 видана 01.04.2014 року (дійсна до 01.04.2019 року)"
                name="licenz">
    </div>

    <h4>Адреса</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
               name="adress_2">
    </div>

    <h4>Платіжні реквізити</h4>
    <div class="form-group">

        <input  type="text" class="form-control" placeholder="ПАТ 'Гарний Банк', МФО 121121, п/р 2600111111 "
               name="bank_2">
    </div>


    <label style="color: inherit"><h4>Платник ПДВ</h4>
    <div class="form-group">

        <input type="checkbox" id="vax_2">
    </div></label>
    <br>
    <div id="pdv2" style="color: inherit; display: none"><h4>ІПН</h4>
        <div class="form-group">

            <input type="text" class="form-control" pattern="[0-9]{10,12}" placeholder="0000000000 (10-12 цифр)"
                   name="vax_2" >
        </div>
        </div>

    <label style="color: inherit"><h4>Платник податку на прибуток на загальних підставах</h4>
        <div class="form-group">

            <input type="checkbox" name="platn_prib_2">
        </div></label>
</div>


