<!--Для статута-->


<h4>Назва створюваного Товариства Українською</h4>
<div class="form-group">

    <input required  type="text" class="form-control" placeholder='Моя Фірма'
           name="name_komp">
</div>
<h4>Назва створюваного Товариства Англійською</h4>
<div class="form-group">

    <input required  type="text" class="form-control" placeholder='Moya Firma'
           name="name_komp_en">
</div>
<h4>Місцезнаходження Товариства</h4>
<div class="form-group">

    <input required  type="text" class="form-control" placeholder='м.Київ, вул.Артема,42'
           name="address">
</div>
<h4>Статутний фонд</h4>
<div class="form-group">

    <input required  type="text" class="form-control" placeholder='500000.00'
           name="stat_fond">
</div>
<h4>Кількість засновників - фізичних осіб</h4>
<div class="form-group">

    <input style="width: 150px" type="text" class="form-control count_fiz" id="cf" pattern="[0-9]*"   name="count_fiz" placeholder="0"
           onchange="fiz_value(this);">

</div>

<div class="fiz">

</div>
<h4>Кількість засновників - юридичних осіб</h4>
<div class="form-group">

    <input style="width: 150px" type="text" class="form-control count_jur" id="cj" pattern="[0-9]*"   name="count_jur" placeholder="0"
           onchange="jur_value(this);">

</div>

<div class="jur">

</div>



