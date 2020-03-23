function validate(id, idgood, idbad) {
    var a = document.getElementById(id);
    var b = document.getElementById(idgood);
    var c = document.getElementById(idbad);
    var x;
    if (a.value != "") {

        b.classList.remove('d-none');
        a.classList.add('is-valid');

        c.classList.add('d-none');
        a.classList.remove('is-invalid');

        return true;

    } else {

        c.classList.remove('d-none');
        a.classList.add('is-invalid');

        b.classList.add('d-none');
        a.classList.add('is-invalid');
        return false;
    }

}



function validatesubmit(x) {
    var x = validate('firstname', 'firstnamegood', 'firstnamebad');
    var y = validate('lastname', 'lastnamegood', 'lastnamebad');
    var z = validate('password', 'passwordgood', 'passwordbad');
    var z1 = validate('repassword', 'repasswordgood', 'repasswordbad');
    if ((x == true) && (y == true) && (z == true) && (z1 == true)) {
        var d = document.getElementById('password');
        var f = document.getElementById('repassword');
        if (d.value!= f.value) {
            alert("You didn't re-type your password correctly!");
        } /*else {
            var z = document.getElementById('link');
            z.setAttribute('href', 'file:///C:/Users/PETER/Desktop/FORMALAB/s4/html/main.html');
        }*/
    } else {

        alert("Please complete all of your information!");

    }

}
