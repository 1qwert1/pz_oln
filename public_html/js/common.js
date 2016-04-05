$(document).change(function () {
    //платедьщик НДС?
    if ($("#vax_1").prop("checked")) {
        $('#pdv').css('display', 'block');
    }
    else {
        $('#pdv').css('display', 'none');
    }


    if ($("#vax_2").prop("checked")) {
        $('#pdv2').css('display', 'block');
    }
    else {
        $('#pdv2').css('display', 'none');
    }

});

$(function () {

    $(".datepicker").datepicker({
        firstDay: 1,
        autoSize: true,
        dateFormat: "dd.mm.yy",
        monthNames: ["Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень",
            "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень"],
        monthNamesShort: ["Січ", "Лют", "Бер", "Кві", "Трав", "Черв", "Лип", "Серп", "Вер", "Жовт", "Лист", "Груд"],
        dayNames: ["Неділя", "Понеділок", "Вівторок", "Середа", "Четвер", "П’ятниця", "Субота"],
        dayNamesShort: ["Нед", "Пон", "Вів", "Сер", "Чет", "П’ят", "Суб"],
        dayNamesMin: ["Нд", "Пн", "Вв", "Ср", "Чт", "Пт", "Сб"],
        showOtherMonths: true,
        yearRange: "1900:",
        selectOtherMonths: true,
        changeYear: true
    });
});

//добавляем в форму к иску о разводе детей
function a_value(o) {
    if (o.value) {
        $('.child_marrige').html('');
        for (var i = o.value; i > 0; i--) {
            $('.child_marrige').append('<br><div style="color: inherit;"><h4>Прізвище ім\'я по батькові  дитини</h4>' +
                '<div class="form-group">' +
                '<input required  type="text" class="form-control"  placeholder="Петренко Василь Семенович"   name="child_name_' + i + '" pattern=\'([А-ЯІЇЄ][а-яіїє’-]+[\\s]?){3,}\'" ></div><br>' +
                '<h4>Дата народження дитини</h4><div class="form-group"><input required type="text" class="form-control datepicker" placeholder="01.01.1990"' +
                'name="date_born_child_' + i + '"></div></div>');
        }


    }
    $(".datepicker").datepicker({
        firstDay: 1,
        autoSize: true,
        dateFormat: "dd.mm.yy",
        monthNames: ["Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень",
            "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень"],
        monthNamesShort: ["Січ", "Лют", "Бер", "Кві", "Трав", "Черв", "Лип", "Серп", "Вер", "Жовт", "Лист", "Груд"],
        dayNames: ["Неділя", "Понеділок", "Вівторок", "Середа", "Четвер", "П’ятниця", "Субота"],
        dayNamesShort: ["Нед", "Пон", "Вів", "Сер", "Чет", "П’ят", "Суб"],
        dayNamesMin: ["Нд", "Пн", "Вв", "Ср", "Чт", "Пт", "Сб"],
        showOtherMonths: true,
        yearRange: "1900:",
        selectOtherMonths: true,
        changeYear: true
    });
}


// $(window).load(function () {
//
//     $(".loader_inner").fadeOut();
//
//
// });


//запрет на выделение и копирование текста
//document.ondragstart =  test;
//document.onselectstart = test;
//document.oncontextmenu = test;
//
//
//function test() {
//
//    return false}

function fiz_value(o) {
    if (o.value) {
        $('.fiz').empty();
        for (var i = 1; i <= o.value; i++) {
            $('.fiz').append('<h4>Прізвище ім\'я по батькові засновника - фізичної особи ' + i + '</h4><div class="form-group">' +
                '<input required type="text" class="form-control" placeholder="Петренко Семен Васильович"' +
                'name="name_zas_' + i + '"></div><h4>Серія та номер паспорта засновника - фізичної особи ' + i + '</h4><div  class="form-group">' +
                '<input required  type="text" class="form-control" style="width: 150px;" placeholder=\'МА №232232\'name="pasp_' + i + '\">' +
                '</div><h4>Ким виданий паспорт засновника - фізичної особи ' + i + '</h4><div class="form-group"><input required  type="text" class="form-control"' +
                ' placeholder=\'Миронівським РВ УМВС України в Черкаській обл\' name="vidan_' + i + '"></div><h4>Місце проживання засновника - фізичної особи ' + i + '</h4>' +
                '<div class="form-group"><input required  type="text" class="form-control" placeholder=\'м.Київ, вул.Артема, 22\'' +
                'name="prop_' + i + '"></div><h4>Ідентифікаційний номер засновника - фізичної особи ' + i + '</h4><div class="form-group"><input required  type="text" ' +
                'class="form-control" style="width: 150px;" placeholder=\'2222222222\'name="id_' + i + '"></div><h4>Частка в статутному фонді (від 0 до 1)' +
                ' засновника - фізичної особи ' + i + '</h4><div class="form-group">' +
                '<input required  type="text" class="form-control" style="width: 150px;" placeholder=\'0.5\'name="stat_chast_' + i + '"></div>');
        }


    }

}

function jur_value(o) {
    if (o.value) {
        $('.jur').empty();
        for (var i = 1; i <= o.value; i++) {
            $('.jur').append('<h4>Назва засновника - юридична особа ' + i + '</h4><div  class="form-group">' +
                '<input required  type="text" class="form-control" placeholder=\'ТОВ "Засновник"\'name="nazv_' + i + '\">' +
                '</div><h4>Місцезнаходження засновника - юридична особа ' + i + '</h4>' +
                '<div class="form-group"><input required  type="text" class="form-control" placeholder=\'м.Київ, вул.Артема, 22\'' +
                'name="prop_jur_' + i + '"></div><h4>Код ЄДРПОУ засновника - юридична особа ' + i + '</h4><div class="form-group"><input required  type="text" ' +
                'class="form-control" style="width: 150px;" placeholder=\'2222222222\'name="id_jur_' + i + '"></div><h4>Частка в статутному фонді (від 0 до 1)' +
                ' засновника - юридична особа ' + i + '</h4><div class="form-group">' +
                '<input required  type="text" class="form-control" style="width: 150px;" placeholder=\'0.5\'name="stat_chast_jur_' + i + '"></div>');
        }


    }

}