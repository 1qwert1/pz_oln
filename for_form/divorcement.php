<!--для иска по расторжению брака-->



<h4>Дата реєстрації шлюбу</h4>
<div class="form-group">

    <input required type="text" class="form-control datepicker" placeholder="01.01.1990"
           name="date_marriage">

</div>

<h4>Ким було зареєстровано шлюб</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="Цветівською селищною радою Петреківського району Полтавської області"
           name="place_marrige">

</div>

<h4>Номер запису про реєстрацію шлюбу</h4>
<div class="form-group">

    <input required type="text" class="form-control" placeholder="2025" style="width: 350px"
           name="number_marrige">

</div>



<h4>Кількість дітей віком до 23 років</h4>
<div class="form-group">

    <input type="text" class="form-control count_child" id="cch" pattern="[0-9]*"   name="count_child" placeholder="0"
           onchange="a_value(this);">

</div>

<div class="child_marrige">

</div>