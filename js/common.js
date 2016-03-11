







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

$(function() {

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
        yearRange: "1900:2016",
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
                '<h4>Дата народження дитини</h4><div class="form-group"><input required type="text" class="form-control datepicker"' +
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
        yearRange: "1900:2016",
        selectOtherMonths: true,
        changeYear: true
    });
}








$(window).load(function () {

    $(".loader_inner").fadeOut();


});


//запрет на выделение и копирование текста
document.ondragstart = test;
document.onselectstart = test;
document.oncontextmenu = test;
function test() {return false}

