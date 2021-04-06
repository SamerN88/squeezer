function validateInput(event) {
    event.preventDefault();

    var day = Number($('select[name="day"]')[0].value);
    var month = $('select[name="month"]')[0].value.slice(0, 3);
    var year = Number($('select[name="year"]')[0].value);

    var maxDays = {
        Jan: 31,
        Feb: year % 4 === 0 ? 29 : 28,
        Mar: 31,
        Apr: 30,
        May: 31,
        Jun: 30,
        Jul: 31,
        Aug: 31,
        Sep: 30,
        Oct: 31,
        Nov: 30,
        Dec: 31
    }

    if (day > maxDays[month]) {
        $('#error-msg').html('Invalid date.');
    } else {
        $('form').submit();
    }
}


$('input[type="submit"]').click(validateInput);