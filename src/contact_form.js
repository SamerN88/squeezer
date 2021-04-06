function validateEmail(email) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return re.test(String(email).toLowerCase());
}


function validateInput(event) {
    event.preventDefault();

    if (!validateEmail(email.value)) {
        $('#error-msg').html('Invalid email.');
        errorBorder('email');
    } 
    else if (message.value.trim() === '') {
        $('#error-msg').html('Message cannot be empty.');
        errorBorder('message');
    } 
    else {
        $('form').submit();
    }
}


// Activate red border when input is invalid
function errorBorder(id) {
    $(`#${id}`).addClass('formEntry-ERROR');
}


// Return border to normal style
function normalBorder(id) {
    $(`#${id}`).removeClass('formEntry-ERROR');
}


$('#submit-btn').click(validateInput);
$('#email').focus(() => { normalBorder('email') });
$('#message').focus(() => { normalBorder('message') });
