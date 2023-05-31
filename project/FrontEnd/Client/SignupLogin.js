let currentSelectionLogin = true;
/*
RegEx	Description
^	The password string will start this way
(?=.*[a-z])	The string must contain at least 1 lowercase alphabetical character
(?=.*[A-Z])	The string must contain at least 1 uppercase alphabetical character
(?=.*[0-9])	The string must contain at least 1 numeric character
(?=.*[!@#$%^&*])	The string must contain at least one special character, but we are escaping reserved RegEx characters to avoid conflict
(?=.{8,})	The string must be eight characters or longer
*/
const passWordReg = new RegExp("^((?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*?><.,;:_\s]))");
const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const nameAndSurnameReg = new RegExp("^((?=.{2,})(?=.*[a-z]))");

const toggleSignUpLogin = function(){
    if(currentSelectionLogin){
        document.querySelector(".signup-login-box").innerHTML = '<form action="#" method="post" onsubmit="return validateSignUp()" class="needs-validation">' +
            '<div class="row align-items-center rounded-right-3">' +
                '<div class="header-text">' +
                    '<h3>Welcome to Winery SA</h3>' +
                    '<p>Sign up to access the finest wineries</p>' +
                '</div>' +
                '<div class="input-group mb-2 was-validated">' +
                    '<input type="text"  id="name" class="form-control form-control-lg bg-light fs-6" placeholder="first name" required/>' +
                '</div>' +
                '<div class="input-group mb-2 was-validated">' +
                    '<input type="text"  id="surname" class="form-control form-control-lg bg-light fs-6" placeholder="surname" required/>' +
                '</div>' +
                '<div class="input-group mb-2 was-validated">' +
                    '<input type="email"  id="email" class="form-control form-control-lg bg-light fs-6" placeholder="email address" required/>' +
                '</div>' +
                '<div class="input-group mb-2 was-validated">' +
                    '<input type="password"  id="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" required/>' +
                '</div>' +
                '<div class="input-group mb-1">' +
                    '<div class="form-check">'+
                        '<input class="form-check-input checkbox-input" type="checkbox" value="" id="flexCheckDefault">'+
                        '<label class="form-check-label" for="flexCheckDefault">I am South African</label>'+
                    '</div>'+
                '</div>' +
                '<div class="input-group mb-2">' +
                    '<input type="submit" class="btn btn-lg w-100 fs-6 login-btn" value="Signup">' +
                '</div>' +
                '<div class="input-group mb-1">' +
                    '<button class="btn btn-lg btn-light w-100 fs-6 no-account-btn" onclick="toggleSignUpLogin()">Have an account? Login instead</button>' +
                '</div>'+
                '<p class="text-danger error-container"></p>'+
            '</div>'+
        '</form>';
        currentSelectionLogin = false;
    }
    else{
        document.querySelector(".signup-login-box").innerHTML = '<form action="#" method="post" onsubmit="return validateLogin()" class="needs-validation">' +
            '<div class="row align-items-center rounded-right-3">' +
                '<div class="header-text mb-4">' +
                    '<h3>Welcome back to Winery SA</h3>' +
                    '<p>We are glad to see you again</p>' +
                '</div>' +
                '<div class="input-group mb-3 was-validated">' +
                    '<input type="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="email address" required/>' +
                '</div>' +
                '<div class="input-group mb-3 was-validated">' +
                    '<input type="password"  id="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" required/>' +
                '</div>' +
                '<div class="input-group mb-3">' +
                    '<input type="submit" class="btn btn-lg w-100 fs-6 login-btn" value="Login">' +
                '</div>' +
                '<div class="input-group mb-3">' +
                    '<button class="btn btn-lg btn-light w-100 fs-6 no-account-btn" onclick="toggleSignUpLogin()">Don\'t have an account? Signup instead</button>' +
                '</div>'+
                '<p class="text-danger error-container"></p>'+
            '</div>'+
        '</form>';
        currentSelectionLogin = true;
    }
};

/**
 * Signup Json:
 * {
 *  'type': string,
 *  'username': string,
 *  'email': string,
 *  'password': string,
 *  'isSouthAfrican': boolean
 * }
 * 
 */

const validateSignUp = function(){
    const getName = document.getElementById("name").value;
    const getSurname = document.getElementById("surname").value;
    const getEmail = document.getElementById("email").value;
    const getPassword = document.getElementById("password").value;
    const getIsSouthAfrican = document.getElementById("flexCheckDefault").checked;

    var isSouthAfrican;
    if(getIsSouthAfrican){
        isSouthAfrican = 1;
    }
    else{
        isSouthAfrican = 0;
    }

    if(getName == "" || getSurname == "" || getEmail == "" || getPassword == ""){
        document.querySelector(".error-container").innerHTML = "please fill in the form";
        return false;
    }

    if(nameAndSurnameReg.test(getName)){//name is valid
        if(nameAndSurnameReg.test(getSurname)){//surname is valid
            if(getEmail.match(regexEmail)){//email valid
                if(passWordReg.test(getPassword)){//password valid
                    //add backend code here
                    //json to be sent to api
                    var json = {'type': 'REGISTER', 'username':(getName + getSurname),'email': getEmail, 'password': getPassword, 'isSouthAfrican': isSouthAfrican};
                    var req = new XMLHttpRequest;

                    req.onreadystatechange = function(){//recieves api response
                        if(req.readyState == 4 && req.status == 200)
                        {
                            var res = req.responseText;
                            var jRes = JSON.parse(res);

                            if(jRes.status == 'success'){
                                toggleSignUpLogin();
                            }
                            else if(jRes.status == 'error'){
                                document.querySelector(".error-container").innerHTML = jRes.data;
                            }
                        }
                    }

                    req.open('POST', '../../Backend/Api/Api.php');
                    req.send(JSON.stringify(json))
                    //end backend code here
                    return false;
                }
                else{
                    document.querySelector(".error-container").innerHTML = "Password should be greater than 8 characters and contain alphanumeric letters with symbols";
                    document.getElementById("password").value = "";
                }
            }
            else{
                document.querySelector(".error-container").innerHTML = "please fill in a valid email";
                document.getElementById("email").value = "";
                document.getElementById("password").value = "";
            }
        }
        else{
            document.querySelector(".error-container").innerHTML = "please fill in a valid surname";
            document.getElementById("surname").value = "";
            document.getElementById("password").value = "";
        }
    }
    else{
        document.querySelector(".error-container").innerHTML = "please fill in a valid name";
        document.getElementById("name").value = "";
        document.getElementById("password").value = "";
    }
    return false;
};

/**
 * Login Json:
 * {
 *  'type': string,
 *  'email': string,
 *  'password': string,
 * }
 * 
 */

const validateLogin = function(){
    const getEmail = document.getElementById("email").value;
    const getPassword = document.getElementById("password").value;

    if(getEmail == "" || getPassword == ""){
        document.querySelector(".error-container").innerHTML = "please fill in the form";
        return false;
    }

    
    if(getEmail.match(regexEmail)){//email valid
        if(getPassword.match(passWordReg)){//password valid
            //add backend code here
            //json to be sent to api
            var json = {'type': 'LOGIN', 'email': getEmail, 'password': getPassword};
            var req = new XMLHttpRequest;

            req.onreadystatechange = function(){//recieves api response
                if(req.readyState == 4 && req.status == 200)
                {
                    var res = req.responseText;
                    var jRes = JSON.parse(res);

                    if(jRes.status == 'success'){
                        window.location.href = "index.php";
                    }
                    else if(jRes.status == 'error'){
                        document.querySelector(".error-container").innerHTML = jRes.data;
                    }
                }
            }

            req.open('POST', '../../Backend/Api/Api.php');
            req.send(JSON.stringify(json));
            //end backend code here
            return false;
        }
        else{
            document.querySelector(".error-container").innerHTML = "Password should be greater than 8 characters and contain alphanumeric letters with symbols";
            document.getElementById("password").value = "";
        }
    }
    else{
        document.querySelector(".error-container").innerHTML = "please fill in a valid email";
        document.getElementById("email").value = "";
        document.getElementById("password").value = "";
    }
    return false;

};
