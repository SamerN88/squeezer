var submitted = false;


function validateEmail(email) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return re.test(String(email).toLowerCase());
}


function validateInputAndSubmit(event) {
    event.preventDefault();

    // Prevents user from submitting duplicate emails by clicking submit multiple times while form is processing
    if (submitted) {
        return;
    }

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
        submitted = true;
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


$('#submit-btn').click(validateInputAndSubmit);
$('#email').focus(() => { normalBorder('email') });
$('#message').focus(() => { normalBorder('message') });
