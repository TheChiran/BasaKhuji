function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('userPassword').value;
    var email = document.getElementById('userEmail').value;
    //console.log('Username: '+username);
    if (!username || username.length == 0 && !password || password.length == 0 && !email || email.length == 0) {
        document.getElementById('errorMsgBox').style = "display:block";
    } else {
        var isEmail = validateEmail(email);
        if (!isEmail) {
            //alert('Please enter valid email!');
            invalidEmail();
            
        } else {
            document.getElementById('errorMsgBox').style = "display:none";
            document.getElementById('successMsgBox').style = "display:block";
            resetForm();
            setTimeout(function () {
                window.location.href = "login.html";
            }, 2000);
        }


        //alert('Thank you!');
    }
}

function register() {
    validateForm();
    //console.log('hello world!');
}

function validateEmail(mail) {
    var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mailFormat.test(mail) == false) {
        return false;
    }else{
        return true;
    }
}

function invalidEmail(){
    document.getElementById('userEmail').style="border: 1px solid red";
    document.getElementById('invalid-email').innerHTML="Please Enter Valid Email";
}

function resetForm() {
    document.getElementById('username').value = '';
    document.getElementById('userPassword').value = '';
}