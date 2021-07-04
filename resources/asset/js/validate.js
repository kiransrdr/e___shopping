// regex patterns
const patterns = {
    fname: /^[a-zA-Z]{1,11}$/,
    lname: /^[a-zA-Z]{1,11}$/,
    telephone: /^[0-9]{11}$/,
    username: /^[a-z]{5,12}$/i,
    password: /^[a-z0-9@-]{8,20}$/i,
    email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
    //             yourname @ domain   .  com          ( .uk )
    verify: /^[0-9]{4}$/,
    credit: /^[0-9]{5}$/,
    zip: /^[0-9]{5}$/
};


function validate(field) {
    if (patterns[field.name].test(field.value)) {
        field.className = 'valid';
    } else {
        field.className = 'invalid';
    }
}

function match(field) {
    if (field.value == document.getElementById("password").value) {
        field.className = 'valid';
    } else {
        field.className = 'invalid';
    }
}