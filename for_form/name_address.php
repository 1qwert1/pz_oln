<br>
<h4>Им'я в родовому відміннику позивача</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="Петренко Семен Васильович"
           name="name_poz">
</div>

<br>
<h4>Адреса позивача</h4>
<div class="form-group">

    <input required  type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
           name="adress_poz">
</div>

<?php if($val == 1):?>

<br>
<h4>Им'я в родовому відміннику відповідача</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="Петренко Семен Васильович"
           name="name_vidp">
</div>

<br>
<h4>Адреса відповідача</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
           name="adress_vidp">
</div>

<?php else: ?>

    <br>
    <h4>Назва відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" placeholder='ТОВ "Будівельник і Ко"'
               name="name_vidp">
    </div>
    <br>
    <h4>Код ЄДРПОУ відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" pattern="[0-9]{8}" placeholder="00000000"
               name="kod_vidp">
    </div>

    <br>
    <h4>Адреса відповідача</h4>
    <div class="form-group">

        <input required type="text" class="form-control" placeholder="03035, м.Київ, вул.Артема, 22"
               name="adress_vidp">
    </div>


<?php endif ?>