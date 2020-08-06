var userName;
var email;
var password;
var userRole='User';

function validateForm() {
    userName = document.getElementById('username').value;
    password = document.getElementById('userPassword').value;
    email = document.getElementById('userEmail').value;
    //console.log('Username: '+username);
    if (!username || username.length == 0 && !password || password.length == 0 && !email || email.length == 0) {
        document.getElementById('errorMsgBox').style = "display:block";
    } else {
        var isEmail = validateEmail(email);
        if (!isEmail) {
            //alert('Please enter valid email!');
            return false;
            
        } else {
            return true;
        }


        //alert('Thank you!');
    }
}

function registerComplete(){
    document.getElementById('errorMsgBox').style = "display:none";
    document.getElementById('successMsgBox').style = "display:block";
    resetForm();
    setTimeout(function () {
        window.location.href = "login.php";
    }, 2000);
}

function registerError(){
    //to handle error
}

function register() {
    var checkValidation = validateForm();
    if(checkValidation==true){
        $.ajax({
            url:"user/sign-up.function.php",
            type:"POST",
            data:{
                username: getUsername(),
                email: getUserEmail(),
                password: getUserPassword(),
                role: getUserRole()
            },
            success: function(response){
                if(response==true){
                    registerComplete();
                }else if(response==false){
                    registerError();
                }
            }
        });
    }else{
        invalidEmail();
    }
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

function getUsername(){
    return userName;
}

function getUserEmail(){
    return email;
}
function getUserPassword(){
    return password;
}
function getUserRole(){
    return userRole;
}

function invalidEmail(){
    document.getElementById('userEmail').style="border: 1px solid red";
    document.getElementById('invalid-email').innerHTML="Please Enter Valid Email";
}

function resetForm() {
    document.getElementById('username').value = '';
    document.getElementById('userPassword').value = '';
    document.getElementById('userEmail').value = '';
}