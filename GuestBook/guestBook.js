document.getElementById("guest-book").onsubmit = validate;

function validate() {
    let valid = true;

    let errors = document.getElementsByClassName("errs");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    let first = document.getElementById("firstName").value;
    let last = document.getElementById("lastName").value;
    let email = document.getElementById("email").value;
    let linkedIn = document.getElementById("linkedIn").value;
    let meet = document.getElementById("meet").value;
    let check = document.getElementById("gridCheck").checked;

    //check first name
    if (first == "") {
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }
    //check last name
    if (last == "") {
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    // check for email
    if(check) {
        if (email == "") {
            let errEmail = document.getElementById("errEmail");
            errEmail.style.visibility = "visible";
            valid = false;
        }
    }

    //check for linkedIn
        if (!linkedIn.startsWith("http") || !linkedIn.endsWith(".com")) {
            let errlinked = document.getElementById("errLinkedIn");
            errlinked.style.visibility = "visible";
            valid = false;
        }


    // check for how we met
    if (meet == "Choose...") {
        let errMeet = document.getElementById("errMeet");
        errMeet.style.visibility = "visible";
        valid = false;
    }

    return valid;
}

